<?php

namespace App\Filament\Resources\Mustahiks;

use App\Filament\Resources\Mustahiks\Pages\CreateMustahik;
use App\Filament\Resources\Mustahiks\Pages\EditMustahik;
use App\Filament\Resources\Mustahiks\Pages\ListMustahiks;
use App\Filament\Resources\Mustahiks\Schemas\MustahikForm;
use App\Filament\Resources\Mustahiks\Tables\MustahiksTable;
use App\Models\Mustahik;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MustahikResource extends Resource
{
    protected static ?string $navigationLabel = 'Data Mustahik';
    protected static ?string $pluralLabel = 'Data Mustahik';
    protected static ?string $label = 'Data Mustahik';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?int $navigationSort = 2;

    public static function form(Schema $schema): Schema
    {
        return MustahikForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MustahiksTable::configure($table);
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
            'index' => ListMustahiks::route('/'),
            'create' => CreateMustahik::route('/create'),
            'edit' => EditMustahik::route('/{record}/edit'),
        ];
    }
}
