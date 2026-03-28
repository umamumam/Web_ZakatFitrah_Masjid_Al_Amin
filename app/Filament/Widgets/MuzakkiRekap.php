<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class MuzakkiRekap extends StatsOverviewWidget
{
    protected static bool $isDiscovered = false;
    protected int | string | array $columnSpan = 'full';

    protected function getStats(): array
    {
        return [
            Stat::make('Total Muzakki', \App\Models\Muzakki::count())
                ->descriptionIcon('heroicon-m-user-group')
                ->color('success'),
            Stat::make('Total Beras (Kg)', \App\Models\Muzakki::sum('beras') . ' Kg')
                ->descriptionIcon('heroicon-m-shopping-bag')
                ->color('warning'),
            Stat::make('Total Uang (Rp)', 'Rp ' . number_format(\App\Models\Muzakki::sum('uang'), 0, ',', '.'))
                ->descriptionIcon('heroicon-m-banknotes')
                ->color('success'),
        ];
    }
}
