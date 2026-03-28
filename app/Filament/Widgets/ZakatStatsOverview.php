<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ZakatStatsOverview extends StatsOverviewWidget
{
    protected static ?int $sort = 1;
    protected int | string | array $columnSpan = 'full';
    protected function getStats(): array
    {
        return [
            Stat::make('Total Muzakki', \App\Models\Muzakki::count())
                ->description('Pemberi Zakat')
                ->descriptionIcon('heroicon-m-user-group')
                ->color('success'),
            Stat::make('Total Mustahik', \App\Models\Mustahik::count())
                ->description('Penerima Zakat')
                ->descriptionIcon('heroicon-m-user')
                ->color('info'),
            Stat::make('Total Beras (Kg)', \App\Models\Muzakki::sum('beras') . ' Kg')
                ->description('Total terkumpul')
                ->descriptionIcon('heroicon-m-shopping-bag')
                ->color('warning'),
            Stat::make('Total Uang (Rp)', 'Rp ' . number_format(\App\Models\Muzakki::sum('uang'), 0, ',', '.'))
                ->description('Total uang terkumpul')
                ->descriptionIcon('heroicon-m-banknotes')
                ->color('success'),
        ];
    }
}
