<?php

namespace App\Filament\Resources\Bookings\Schemas;

use App\Models\Package;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class BookingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('booking_code')
                    ->default(fn () => 'SKY-' . strtoupper(substr(uniqid(), -6)))
                    ->readOnly()
                    ->required(),

                Select::make('package_id')
                    ->label('Package')
                    ->options(Package::where('is_active', true)->pluck('name', 'id'))
                    ->reactive()
                    ->afterStateUpdated(function ($state, callable $set) {
                        $pkg = Package::find($state);
                        if ($pkg) {
                            $set('package_name', $pkg->name);
                            $set('total_price', $pkg->price);
                        }
                    })
                    ->required(),

                TextInput::make('package_name')
                    ->label('Package Name')
                    ->required(),

                TextInput::make('customer_name')
                    ->label('Customer Full Name')
                    ->required(),

                TextInput::make('customer_email')
                    ->label('Email Address')
                    ->email()
                    ->required(),

                TextInput::make('customer_phone')
                    ->label('WhatsApp / Phone')
                    ->tel()
                    ->required(),

                DatePicker::make('booking_date')
                    ->label('Booking Date')
                    ->required(),

                Select::make('session_time')
                    ->label('Session Time')
                    ->options([
                        '09:00 AM' => '09:00 AM – Morning Session',
                        '11:30 AM' => '11:30 AM – Mid-day Session',
                        '02:00 PM' => '02:00 PM – Afternoon Session',
                        '04:30 PM' => '04:30 PM – Sunset Session',
                    ])
                    ->required(),

                TextInput::make('num_people')
                    ->label('Number of Participants')
                    ->required()
                    ->numeric()
                    ->minValue(1)
                    ->default(1),

                Select::make('jewelry_choice')
                    ->label('Jewelry To Make')
                    ->options([
                        'Silver Ring' => 'Silver Ring',
                        'Silver Bracelet' => 'Silver Bracelet',
                        'Silver Pendant' => 'Silver Pendant',
                        'Custom / Mixed Pieces' => 'Custom / Mixed Pieces',
                    ])
                    ->default('Silver Ring')
                    ->required(),

                TextInput::make('total_price')
                    ->label('Total Price (IDR)')
                    ->numeric()
                    ->prefix('IDR')
                    ->required()
                    ->default(500000),

                Select::make('status')
                    ->label('Booking Status')
                    ->options([
                        'pending' => 'Pending Confirmation',
                        'confirmed' => 'Confirmed',
                        'completed' => 'Completed',
                        'cancelled' => 'Cancelled',
                    ])
                    ->default('pending')
                    ->required(),

                Select::make('payment_status')
                    ->label('Payment Status')
                    ->options([
                        'unpaid' => 'Unpaid',
                        'deposit_paid' => 'Deposit Paid',
                        'paid' => 'Fully Paid',
                    ])
                    ->default('unpaid')
                    ->required(),

                Textarea::make('special_requests')
                    ->label('Special Requests / Notes from Customer')
                    ->columnSpanFull(),

                Textarea::make('admin_notes')
                    ->label('Internal Studio / Silversmith Notes')
                    ->columnSpanFull(),
            ]);
    }
}
