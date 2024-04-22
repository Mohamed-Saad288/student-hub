<?php

namespace App\Filament\Resources\CourseResource\Widgets;

use App\Models\Course;
use App\Models\Post;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class CourseOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('All Courses', Course::all()->count())
                ->description('increase')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),
            Stat::make('All Users', User::all()->count())
                ->description('Count')
                ->descriptionIcon('heroicon-m-identification')
                ->color('success'),
            Stat::make('Average time on page', '3:12'),
        ];
    }
}
