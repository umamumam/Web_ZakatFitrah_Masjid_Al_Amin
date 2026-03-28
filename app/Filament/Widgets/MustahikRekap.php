<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class MustahikRekap extends StatsOverviewWidget
{
    protected static bool $isDiscovered = false;
    protected int | string | array $columnSpan = 'full';

    protected function getStats(): array
    {
        return [
            Stat::make('Total Mustahik', \App\Models\Mustahik::count())
                ->descriptionIcon('heroicon-m-user')
                ->color('info'),
            Stat::make('Total Beras Disalurkan', \App\Models\Mustahik::sum('jumlah_terima_beras') . ' Kg')
                ->descriptionIcon('heroicon-m-shopping-bag')
                ->color('warning'),
            Stat::make('Total Uang Disalurkan', 'Rp ' . number_format(\App\Models\Mustahik::sum('jumlah_terima_uang'), 0, ',', '.'))
                ->descriptionIcon('heroicon-m-banknotes')
                ->color('success'),
        ];
    }
}
