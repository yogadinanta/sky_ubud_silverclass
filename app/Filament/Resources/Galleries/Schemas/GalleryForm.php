<?php

namespace App\Filament\Resources\Galleries\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Support\HtmlString;

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

                Placeholder::make('current_image_preview')
                    ->label('Foto Galeri Saat Ini')
                    ->content(function ($record) {
                        if (!$record) return null;
                        $url = $record->image_url;
                        return new HtmlString(
                            '<div style="display: flex; align-items: center; gap: 16px; padding: 12px; border-radius: 10px; background: rgba(0,0,0,0.03); border: 1px solid rgba(0,0,0,0.1);">
                                <img src="' . e($url) . '" alt="Current Gallery Photo" style="width: 120px; height: 80px; object-fit: cover; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);" />
                                <div>
                                    <div style="font-weight: 600; font-size: 14px; margin-bottom: 4px;">Foto Galeri yang Sedang Aktif</div>
                                    <div style="font-size: 12px; opacity: 0.75;">Untuk mengganti foto, upload file baru di bawah atau gunakan tombol edit (ikon pensil).</div>
                                </div>
                            </div>'
                        );
                    })
                    ->visible(fn ($record) => $record !== null)
                    ->columnSpanFull(),

                FileUpload::make('image_path')
                    ->label('Upload / Ganti Foto Galeri')
                    ->image()
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp', 'image/jpg'])
                    ->directory('galleries')
                    ->disk('public')
                    ->visibility('public')
                    ->maxSize(10240)
                    ->openable()
                    ->downloadable()
                    ->deletable(true)
                    ->helperText('Pilih atau tarik foto baru (JPG, PNG, atau WebP maks 10MB) untuk mengganti gambar.')
                    ->required(fn (string $operation): bool => $operation === 'create')
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
