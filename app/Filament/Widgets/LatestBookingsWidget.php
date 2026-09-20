<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\Bookings\BookingResource;
use App\Models\Booking;
use Filament\Actions\Action;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestBookingsWidget extends BaseWidget
{
    protected static ?int $sort = 2;

    protected int | string | array $columnSpan = 'full';

    protected static ?string $heading = 'Recent Customer Reservations';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Booking::query()->latest()->limit(6)
            )
            ->columns([
                TextColumn::make('booking_code')
                    ->label('Code')
                    ->weight('bold')
                    ->searchable()
                    ->color('primary'),

                TextColumn::make('customer_name')
                    ->label('Customer')
                    ->weight('semibold')
                    ->description(fn (Booking $record): string => $record->customer_phone ?: ''),

                TextColumn::make('package_name')
                    ->label('Package')
                    ->badge()
                    ->color('info'),

                TextColumn::make('booking_date')
                    ->label('Date & Time')
                    ->date('M d, Y')
                    ->description(fn (Booking $record): string => $record->session_time ?: ''),

                TextColumn::make('num_people')
                    ->label('Guests')
                    ->numeric()
                    ->alignCenter(),

                TextColumn::make('total_price')
                    ->label('Total Price')
                    ->formatStateUsing(fn ($state) => 'Rp ' . number_format($state, 0, ',', '.'))
                    ->weight('bold'),

                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'confirmed' => 'success',
                        'pending' => 'warning',
                        'completed' => 'info',
                        'cancelled' => 'danger',
                        default => 'gray',
                    }),

                TextColumn::make('payment_status')
                    ->label('Payment')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'paid' => 'success',
                        'deposit_paid' => 'warning',
                        'unpaid' => 'danger',
                        default => 'gray',
                    }),
            ])
            ->recordActions([
                Action::make('whatsapp')
                    ->label('WhatsApp')
                    ->icon(Heroicon::OutlinedChatBubbleLeftRight)
                    ->color('success')
                    ->url(function (Booking $record) {
                        $phone = preg_replace('/[^0-9]/', '', $record->customer_phone);
                        if (str_starts_with($phone, '0')) {
                            $phone = '62' . substr($phone, 1);
                        }
                        $msg = rawurlencode("Hello " . $record->customer_name . "! Greetings from SKY Ubud Silver Class. Regarding your booking (" . $record->booking_code . ")...");
                        return "https://wa.me/{$phone}?text={$msg}";
                    }, shouldOpenInNewTab: true),
                Action::make('edit')
                    ->label('Manage')
                    ->icon(Heroicon::OutlinedPencilSquare)
                    ->url(fn (Booking $record): string => BookingResource::getUrl('edit', ['record' => $record])),
            ])
            ->paginated(false);
    }
}
