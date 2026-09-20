<?php

namespace App\Filament\Widgets;

use App\Models\Booking;
use App\Models\Package;
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

        return [
            Stat::make('Total Bookings', $totalBookings)
                ->description('All customer reservations')
                ->descriptionIcon('heroicon-m-calendar-days')
                ->color('primary'),

            Stat::make('Pending Action', $pendingBookings)
                ->description('Awaiting confirmation')
                ->descriptionIcon('heroicon-m-clock')
                ->color($pendingBookings > 0 ? 'warning' : 'gray'),

            Stat::make('Confirmed Sessions', $confirmedBookings)
                ->description('Ready for silver workshop')
                ->descriptionIcon('heroicon-m-check-badge')
                ->color('success'),

            Stat::make('Total Revenue', 'Rp ' . number_format($totalRevenue, 0, ',', '.'))
                ->description('From confirmed paid bookings')
                ->descriptionIcon('heroicon-m-banknotes')
                ->color('success'),
        ];
    }
}
