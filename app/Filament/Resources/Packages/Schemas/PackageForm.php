<?php

namespace App\Filament\Resources\Packages\Schemas;

use Filament\Forms\Components\FileUpload;
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

                FileUpload::make('image')
                    ->label('Cover Image (Photo displayed at the top of the package card)')
                    ->image()
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp', 'image/jpg'])
                    ->imageResizeMode('cover')
                    ->imageResizeTargetWidth('1200')
                    ->imageResizeTargetHeight('800')
                    ->imageResizeUpscale(false)
                    ->directory('packages')
                    ->disk('public')
                    ->visibility('public')
                    ->maxSize(5120)
                    ->formatStateUsing(function ($state) {
                        if (empty($state) || str_starts_with($state, 'images/') || str_starts_with($state, 'http')) {
                            return null;
                        }
                        return $state;
                    })
                    ->helperText('Upload JPG, PNG, or WebP cover image (Max 5MB). If left empty, default package photo will be used.')
                    ->columnSpanFull(),

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
