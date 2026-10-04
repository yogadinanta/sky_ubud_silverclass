<?php

namespace App\Filament\Resources\Galleries\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class GalleryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Title / Description')
                    ->required(),

                Select::make('category')
                    ->label('Category')
                    ->options([
                        'ring' => 'Silver Ring',
                        'bracelet' => 'Silver Bracelet',
                        'pendant' => 'Silver Pendant',
                        'workshop' => 'Workshop & Artisan Atmosphere',
                        'participants' => 'Happy Participants',
                    ])
                    ->required()
                    ->default('workshop'),

                FileUpload::make('image_path')
                    ->label('Upload Image')
                    ->image()
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp', 'image/jpg'])
                    ->imageResizeMode('cover')
                    ->imageResizeTargetWidth('1200')
                    ->imageResizeTargetHeight('800')
                    ->imageResizeUpscale(false)
                    ->directory('galleries')
                    ->disk('public')
                    ->visibility('public')
                    ->maxSize(5120)
                    ->formatStateUsing(function ($state) {
                        if (empty($state) || str_starts_with($state, 'images/') || str_starts_with($state, 'http')) {
                            return null;
                        }
                        try {
                            if (!\Illuminate\Support\Facades\Storage::disk('public')->exists($state) && !file_exists(public_path('storage/' . $state)) && !file_exists(storage_path('app/public/' . $state))) {
                                return null;
                            }
                        } catch (\Throwable $e) {
                            return null;
                        }
                        return $state;
                    })
                    ->helperText('Upload JPG, PNG, or WebP photo (Max 5MB).')
                    ->required()
                    ->columnSpanFull(),

                Textarea::make('caption')
                    ->label('Caption / Story')
                    ->columnSpanFull(),

                Toggle::make('is_featured')
                    ->label('Featured')
                    ->default(true),

                TextInput::make('sort_order')
                    ->label('Order')
                    ->numeric()
                    ->default(0),
            ]);
    }
}
