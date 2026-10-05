<?php

namespace App\Filament\Resources\Packages\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Support\HtmlString;

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

                Placeholder::make('current_image_preview')
                    ->label('Status & Preview Foto')
                    ->content(function ($record) {
                        $imageUrl = $record ? $record->image_url : asset('images/default_package.jpg');
                        $hasCustom = $record && !empty($record->image);

                        return new HtmlString('
                            <div style="display: flex; align-items: center; gap: 16px; padding: 14px; border-radius: 10px; background: rgba(0,0,0,0.02); border: 1px solid rgba(0,0,0,0.08);">
                                <img src="' . e($imageUrl) . '" alt="Preview Foto" style="width: 120px; height: 80px; object-fit: cover; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); flex-shrink: 0;" />
                                <div>
                                    <div style="margin-bottom: 6px;">
                                        <span style="font-size: 11px; font-weight: 700; padding: 3px 9px; border-radius: 9999px; ' . ($hasCustom ? 'background: #dcfce7; color: #166534; border: 1px solid #bbf7d0;' : 'background: #f3f4f6; color: #4b5563; border: 1px solid #e5e7eb;') . '">
                                            ' . ($hasCustom ? '✓ Foto Kustom Aktif' : 'ℹ Menggunakan Foto Default') . '
                                        </span>
                                    </div>
                                    <div style="font-size: 12px; color: #6b7280; line-height: 1.4;">
                                        ' . ($hasCustom 
                                            ? 'Paket ini menggunakan foto kustom. Untuk mengganti, upload foto baru. Untuk menghapus dan kembali ke default, klik ikon tempat sampah (X) pada kotak upload di bawah.' 
                                            : 'Paket ini belum memiliki foto kustom (menggunakan default sistem). Upload file baru di bawah jika ingin menggantinya.') . '
                                    </div>
                                </div>
                            </div>
                        ');
                    })
                    ->columnSpanFull(),

                FileUpload::make('image')
                    ->label('Upload / Ganti Foto Cover')
                    ->image()
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp', 'image/jpg'])
                    ->directory('packages')
                    ->disk('public')
                    ->visibility('public')
                    ->maxSize(10240)
                    ->openable()
                    ->downloadable()
                    ->deletable(true)
                    ->helperText('Pilih atau tarik (drag) file foto baru untuk mengganti gambar. Untuk menghapus foto kustom dan kembali ke default, klik tanda silang (X) atau ikon tempat sampah pada file.')
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