<?php

namespace App\Filament\Resources\SiteSettings\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class SiteSettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('key')
                    ->label('Setting Key')
                    ->required()
                    ->readOnly(),

                TextInput::make('label')
                    ->label('Label')
                    ->required(),

                TextInput::make('group')
                    ->label('Group')
                    ->default('general'),

                Textarea::make('value')
                    ->label('Value')
                    ->rows(3)
                    ->columnSpanFull(),
            ]);
    }
}
