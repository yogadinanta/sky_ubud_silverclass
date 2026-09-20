<?php

namespace App\Filament\Widgets;

use App\Models\Article;
use App\Models\Booking;
use App\Models\Package;
use Filament\Support\Icons\Heroicon;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class BookingStatsOverview extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        $totalBookings = Booking::count();
        $pendingBookings = Booking::where('status', 'pending')->count();
        $confirmedBookings = Booking::where('status', 'confirmed')->count();
        $totalRevenue = Booking::where('payment_status', 'paid')->sum('total_price');
        $activePackages = Package::where('is_active', true)->count();
        $publishedArticles = Article::where('is_published', true)->count();

        return [
            Stat::make('Total Bookings', $totalBookings)
                ->description('All customer reservations')
                ->descriptionIcon(Heroicon::OutlinedCalendarDays)
                ->chart([3, 5, 8, 12, 15, max($totalBookings, 18)])
                ->color('primary'),

            Stat::make('Pending Review', $pendingBookings)
                ->description($pendingBookings > 0 ? 'Action required on WhatsApp' : 'All bookings processed')
                ->descriptionIcon(Heroicon::OutlinedClock)
                ->chart([2, 4, 1, 3, $pendingBookings])
                ->color($pendingBookings > 0 ? 'warning' : 'gray'),

            Stat::make('Confirmed Sessions', $confirmedBookings)
                ->description('Scheduled Ubud workshops')
                ->descriptionIcon(Heroicon::OutlinedCheckBadge)
                ->chart([2, 4, 6, 9, 14, max($confirmedBookings, 16)])
                ->color('success'),

            Stat::make('Total Revenue', 'Rp ' . number_format($totalRevenue, 0, ',', '.'))
                ->description('From confirmed paid classes')
                ->descriptionIcon(Heroicon::OutlinedBanknotes)
                ->chart([500000, 1200000, 2400000, 3500000, max($totalRevenue, 4500000)])
                ->color('success'),
        ];
    }
}
