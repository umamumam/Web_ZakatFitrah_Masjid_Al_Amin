<?php

namespace App\Filament\Resources\Muzakkis\Schemas;

use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class MuzakkiForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Data Muzakki')
                    ->schema([
                        TextInput::make('nama')
                            ->required(),
                        TextInput::make('alamat'),
                        TextInput::make('beras')
                            ->required()
                            ->numeric()
                            ->suffix('Kg')
                            ->default(0.0),
                        TextInput::make('uang')
                            ->required()
                            ->numeric()
                            ->prefix('Rp')
                            ->default(0),
                    ])
                    ->columnSpanFull()
                    ->columns(2),
            ]);
    }
}
