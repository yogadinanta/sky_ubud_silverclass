<?php

namespace App\Filament\Resources\Testimonials\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('customer_name')
                    ->label('Guest Name')
                    ->required(),

                TextInput::make('country_or_city')
                    ->label('Country / Origin')
                    ->placeholder('e.g. Melbourne, Australia')
                    ->required(),

                Select::make('rating')
                    ->label('Rating')
                    ->options([
                        5 => '⭐⭐⭐⭐⭐ (5 Stars)',
                        4 => '⭐⭐⭐⭐ (4 Stars)',
                        3 => '⭐⭐⭐ (3 Stars)',
                    ])
                    ->default(5)
                    ->required(),

                TextInput::make('item_crafted')
                    ->label('Jewelry Crafted')
                    ->default('Silver Ring')
                    ->required(),

                Textarea::make('review')
                    ->label('Guest Review')
                    ->rows(4)
                    ->required()
                    ->columnSpanFull(),

                Toggle::make('is_featured')
                    ->label('Show on Homepage')
                    ->default(true),

                TextInput::make('sort_order')
                    ->label('Order')
                    ->numeric()
                    ->default(0),
            ]);
    }
}
