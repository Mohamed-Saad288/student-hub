<?php

namespace App\Filament\Widgets;

use App\Models\Competition;
use App\Models\Student;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class AdminOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Users', User::all()->count())
                ->description('Number Of Users')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('success'),
            Stat::make('Competition', Competition::all()->count())
                ->description('Number OF Competition')
                ->descriptionIcon('heroicon-o-Trophy')
                ->color('danger'),
            Stat::make('Students', Student::all()->count())
                ->description('Number of students participating in competitions')
                ->chart([30, 3, 30,3, 30, 3, 50])
                ->color('success'),
        ];
    }
}
