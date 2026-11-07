<?php

namespace App\Filament\Resources\Articles\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Support\HtmlString;

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
                Placeholder::make('current_image_preview')
                    ->label('Foto Cover Artikel Saat Ini')
                    ->content(function ($record) {
                        if (!$record) return null;
                        $url = $record->image_url;
                        $hasCustom = !empty($record->image);

                        return new HtmlString('
                            <div style="display: flex; align-items: center; gap: 16px; padding: 12px; border-radius: 10px; background: rgba(0,0,0,0.03); border: 1px solid rgba(0,0,0,0.1);">
                                <img src="' . e($url) . '" alt="Cover Artikel" style="width: 120px; height: 80px; object-fit: cover; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);" />
                                <div>
                                    <div style="font-weight: 600; font-size: 14px; margin-bottom: 4px;">' . ($hasCustom ? '✓ Cover Artikel Aktif' : 'ℹ Cover Default') . '</div>
                                    <div style="font-size: 12px; opacity: 0.75;">Untuk mengganti foto cover artikel, upload file baru di bawah.</div>
                                </div>
                            </div>
                        ');
                    })
                    ->visible(fn ($record) => $record !== null)
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->label('Upload / Ganti Featured Image')
                    ->image()
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp', 'image/jpg'])
                    ->directory('articles')
                    ->disk('public')
                    ->visibility('public')
                    ->maxSize(10240)
                    ->openable()
                    ->downloadable()
                    ->deletable(true)
                    ->formatStateUsing(function ($state) {
                        if (empty($state) || str_starts_with($state, 'images/') || str_starts_with($state, 'http')) {
                            return null;
                        }
                        try {
                            if (!file_exists(storage_path('app/public/' . $state)) && !file_exists(public_path('storage/' . $state))) {
                                return null;
                            }
                        } catch (\Throwable $e) {
                            return null;
                        }
                        return $state;
                    })
                    ->helperText('Upload JPG, PNG, atau WebP cover artikel (Maks 10MB)')
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
