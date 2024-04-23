<?php

namespace App\Filament\Widgets;

use App\Models\Post;
use Filament\Widgets\ChartWidget;

class PostChart extends ChartWidget
{
    protected static ?string $heading = 'Posts Chart';
    protected static string $color = 'info';
    protected static ?int $sort = 2;


    protected function getData(): array
    {

        return [
            'datasets' => [
                [
                    'backgroundColor' => ' #ff6600',
                    'label' => 'Blog posts created',
                    'data' => [0, 10, 5, 2, 21, 32, 45, 74, 65, 45, 77, 89],
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
