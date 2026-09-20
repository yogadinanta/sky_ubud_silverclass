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
                    ->imageEditor()
                    ->directory('galleries')
                    ->disk('public')
                    ->visibility('public')
                    ->maxSize(5120)
                    ->helperText('Upload JPG, PNG, or WebP photo (Max 5MB). Image editor enabled.')
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
