<?php

namespace App\Filament\Resources\Muzakkis;

use App\Filament\Resources\Muzakkis\Pages\CreateMuzakki;
use App\Filament\Resources\Muzakkis\Pages\EditMuzakki;
use App\Filament\Resources\Muzakkis\Pages\ListMuzakkis;
use App\Filament\Resources\Muzakkis\Schemas\MuzakkiForm;
use App\Filament\Resources\Muzakkis\Tables\MuzakkisTable;
use App\Models\Muzakki;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MuzakkiResource extends Resource
{
    protected static ?string $navigationLabel = 'Data Muzakki';
    protected static ?string $pluralLabel = 'Data Muzakki';
    protected static ?string $label = 'Data Muzakki';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?int $navigationSort = 1;

    public static function form(Schema $schema): Schema
    {
        return MuzakkiForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MuzakkisTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListMuzakkis::route('/'),
            'create' => CreateMuzakki::route('/create'),
            'edit' => EditMuzakki::route('/{record}/edit'),
        ];
    }
}
