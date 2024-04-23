<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class AdminChart extends ChartWidget
{
    protected static ?string $heading = 'Users';
    protected static ?int $sort = 1;

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'borderColor' => '#FFFFFF',
                    'backgroundColor' => ' #ff6600',
                    'label' => 'Users',
                    'data' => [0, 10, 5, 2, 21, 32, 45, 74, 65, 45, 77, 89],
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
