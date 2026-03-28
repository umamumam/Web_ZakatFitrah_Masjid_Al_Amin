<?php

namespace App\Filament\Resources\Mustahiks\Schemas;

use Filament\Schemas\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class MustahikForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Data Mustahik')
                    ->schema([
                        TextInput::make('nama')
                            ->required(),
                        TextInput::make('alamat'),
                        Select::make('kategori_asnaf')
                            ->options([
                                'Fakir' => 'Fakir',
                                'Miskin' => 'Miskin',
                                'Amil' => 'Amil',
                                'Muallaf' => 'Muallaf',
                                'Riqab' => 'Riqab',
                                'Gharim' => 'Gharim',
                                'Fi Sabilillah' => 'Fi sabilillah',
                                'Ibnu Sabil' => 'Ibnu sabil',
                            ])
                            ->required(),
                        TextInput::make('jumlah_terima_beras')
                            ->required()
                            ->numeric()
                            ->suffix('Kg')
                            ->default(0.0),
                        TextInput::make('jumlah_terima_uang')
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
