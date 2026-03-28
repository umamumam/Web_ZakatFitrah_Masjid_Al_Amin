<?php

namespace App\Filament\Resources\Muzakkis\Pages;

use App\Filament\Resources\Muzakkis\MuzakkiResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditMuzakki extends EditRecord
{
    protected static string $resource = MuzakkiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
