<?php

namespace App\Providers;

use App\Models\Package;
use App\Models\SiteSetting;
use Illuminate\Support\Facades\Schema;
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
        // Share packages and settings across all frontend views
        View::composer('frontend.*', function ($view) {
            try {
                if (Schema::hasTable('packages') && Schema::hasTable('site_settings')) {
                    $packages = Package::where('is_active', true)->orderBy('sort_order', 'asc')->get();
                    $settings = SiteSetting::all()->pluck('value', 'key');
                    $view->with('packages', $packages)->with('settings', $settings);
                }
            } catch (\Throwable $e) {
                // Ignore during migrations / CLI setup
            }
        });
    }
}
