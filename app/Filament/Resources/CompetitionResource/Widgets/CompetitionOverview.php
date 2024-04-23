<?php

namespace App\Filament\Resources\CompetitionResource\Widgets;

use App\Models\Competition;
use App\Models\Post;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class CompetitionOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('All Competition', Competition::all()->count())
                ->description('increase')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),
            Stat::make('All Users', User::all()->count())
                ->description('Count')
                ->descriptionIcon('heroicon-m-identification')
                ->color('success'),
            Stat::make('Average time on page', '3:12'),        ];
    }
}
