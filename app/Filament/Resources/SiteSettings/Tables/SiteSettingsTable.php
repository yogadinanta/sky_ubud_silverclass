<?php

namespace App\Filament\Resources\SiteSettings\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SiteSettingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('label')
                    ->label('Setting')
                    ->searchable()
                    ->weight('bold'),

                TextColumn::make('key')
                    ->label('Key')
                    ->badge()
                    ->color('gray'),

                TextColumn::make('value')
                    ->label('Current Value')
                    ->limit(60)
                    ->tooltip(fn ($record) => $record->value),

                TextColumn::make('group')
                    ->label('Group')
                    ->badge()
                    ->color('primary'),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
