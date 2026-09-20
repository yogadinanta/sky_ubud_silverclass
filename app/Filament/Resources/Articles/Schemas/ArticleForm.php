<?php

namespace App\Filament\Resources\Articles\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ArticleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                Textarea::make('excerpt')
                    ->columnSpanFull(),
                Textarea::make('content')
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->label('Featured Image')
                    ->image()
                    ->imageEditor()
                    ->directory('articles')
                    ->disk('public')
                    ->visibility('public')
                    ->maxSize(5120)
                    ->helperText('Upload JPG, PNG, or WebP article cover (Max 5MB)')
                    ->columnSpanFull(),
                TextInput::make('author')
                    ->required()
                    ->default('Star Ubud Team'),
                DatePicker::make('published_at'),
                Toggle::make('is_published')
                    ->required(),
                TextInput::make('sort_order')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
