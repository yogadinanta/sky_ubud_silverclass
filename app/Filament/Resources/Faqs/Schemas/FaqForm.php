<?php

namespace App\Filament\Resources\Faqs\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class FaqForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('question')
                    ->label('Question')
                    ->required()
                    ->columnSpanFull(),

                Textarea::make('answer')
                    ->label('Answer')
                    ->rows(4)
                    ->required()
                    ->columnSpanFull(),

                TextInput::make('category')
                    ->label('Category')
                    ->default('General'),

                TextInput::make('sort_order')
                    ->label('Display Order')
                    ->numeric()
                    ->default(0),

                Toggle::make('is_active')
                    ->label('Show on Website')
                    ->default(true),
            ]);
    }
}
