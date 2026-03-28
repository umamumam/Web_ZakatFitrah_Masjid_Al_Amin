<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class ZakatChart extends ChartWidget
{
    protected ?string $heading = 'Grafik Pengumpulan Zakat';

    protected static ?int $sort = 2;

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Uang (x1.000 Rp)',
                    'data' => [\App\Models\Muzakki::sum('uang') / 1000],
                    'backgroundColor' => '#10b981',
                ],
                [
                    'label' => 'Beras (Kg)',
                    'data' => [\App\Models\Muzakki::sum('beras')],
                    'backgroundColor' => '#f59e0b',
                ],
            ],
            'labels' => ['Total Akumulasi'],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
