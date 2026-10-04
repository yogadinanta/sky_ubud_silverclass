<?php

namespace App\Filament\Resources\Articles\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
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
                    ->rows(3)
                    ->columnSpanFull(),
                RichEditor::make('content')
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->label('Featured Image')
                    ->image()
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp', 'image/jpg'])
                    ->imageResizeMode('cover')
                    ->imageResizeTargetWidth('1200')
                    ->imageResizeTargetHeight('800')
                    ->imageResizeUpscale(false)
                    ->directory('articles')
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
