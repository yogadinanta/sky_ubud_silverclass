<?php

namespace App\Filament\Widgets;

use App\Models\Article;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\Package;
use App\Models\Testimonial;
use Filament\Support\Icons\Heroicon;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ContentOverviewWidget extends BaseWidget
{
    protected static ?int $sort = 3;

    protected function getStats(): array
    {
        $packageCount = Package::count();
        $articleCount = Article::count();
        $galleryCount = Gallery::count();
        $testimonialCount = Testimonial::count();

        return [
            Stat::make('Workshop Packages', $packageCount)
                ->description('Active craft offerings')
                ->descriptionIcon(Heroicon::OutlinedSparkles)
                ->color('info')
                ->url('/admin/packages'),

            Stat::make('Articles & Stories', $articleCount)
                ->description('SEO & craft stories')
                ->descriptionIcon(Heroicon::OutlinedNewspaper)
                ->color('primary')
                ->url('/admin/articles'),

            Stat::make('Gallery Photos', $galleryCount)
                ->description('Moments & creations')
                ->descriptionIcon(Heroicon::OutlinedPhoto)
                ->color('amber')
                ->url('/admin/galleries'),

            Stat::make('Customer Reviews', $testimonialCount)
                ->description('5-star guest ratings')
                ->descriptionIcon(Heroicon::OutlinedStar)
                ->color('warning')
                ->url('/admin/testimonials'),
        ];
    }
}
