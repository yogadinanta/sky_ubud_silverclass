<?php

namespace App\Filament\Resources\Packages\Schemas;

use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PackageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Package Title (e.g. SINGLE, COUPLE, FAMILY, GROUP)')
                    ->required(),

                TextInput::make('slug')
                    ->label('URL Slug')
                    ->required(),

                TextInput::make('price')
                    ->label('Price in IDR (Numeric)')
                    ->required()
                    ->numeric()
                    ->prefix('IDR'),

                TextInput::make('price_label')
                    ->label('Display Price (e.g. IDR 500K / PERSON)')
                    ->required(),

                TextInput::make('min_persons')
                    ->label('Min / Standard Persons')
                    ->required()
                    ->numeric()
                    ->default(1),

                TextInput::make('silver_grams')
                    ->label('Silver Allowance (e.g. 1–5 grams of pure silver)')
                    ->required()
                    ->default('1–5 grams of pure silver'),

                TextInput::make('duration')
                    ->label('Experience Duration')
                    ->required()
                    ->default('1–2 hours'),

                TextInput::make('badge')
                    ->label('Badge Highlight (e.g. Most Popular, Family Choice)'),

                TextInput::make('tagline')
                    ->label('Short Catchy Tagline')
                    ->columnSpanFull(),

                Textarea::make('description')
                    ->label('Full Package Description')
                    ->columnSpanFull(),

                TagsInput::make('inclusions')
                    ->label('Included Items (Press Enter to add each point)')
                    ->placeholder('e.g. 1–5 grams pure silver')
                    ->columnSpanFull(),

                Toggle::make('is_featured')
                    ->label('Featured Package (Highlighted card on website)')
                    ->default(false),

                Toggle::make('is_active')
                    ->label('Active on Website')
                    ->default(true),

                TextInput::make('sort_order')
                    ->label('Display Order (1, 2, 3...)')
                    ->numeric()
                    ->default(1),
            ]);
    }
}
