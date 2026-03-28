<?php

namespace App\Filament\Resources\Muzakkis\Pages;

use App\Filament\Resources\Muzakkis\MuzakkiResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMuzakkis extends ListRecords
{
    protected static string $resource = MuzakkiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            \App\Filament\Widgets\MuzakkiRekap::class,
        ];
    }
}
