<?php

namespace App\Providers;

use App\Models\Package;
use App\Models\SiteSetting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if ($this->app->environment('production') || str_starts_with(config('app.url'), 'https://') || request()->server('HTTP_X_FORWARDED_PROTO') === 'https') {
            URL::forceScheme('https');
        }

        // Share packages and settings across all frontend views
        View::composer('frontend.*', function ($view) {
            try {
                if (Schema::hasTable('packages') && Schema::hasTable('site_settings')) {
                    $settings = SiteSetting::all()->pluck('value', 'key');
                    $customPrice = (int) ($settings['custom_price_per_person'] ?? 500000);
                    $packages = Package::where('is_active', true)
                        ->orderBy('sort_order', 'asc')
                        ->get()
                        ->map(function ($pkg) use ($customPrice) {
                            if ($pkg->slug === 'custom') {
                                $pkg->price = $customPrice;
                                $pkg->price_label = 'Rp ' . number_format($customPrice, 0, ',', '.') . ' / Person (Custom)';
                            }
                            return $pkg;
                        });
                    $view->with('packages', $packages)->with('settings', $settings);
                }
            } catch (\Throwable $e) {
                // Ignore during migrations / CLI setup
            }
        });
    }
}
