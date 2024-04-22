<?php

namespace App\Filament\Resources\CourseResource\Pages;

use App\Filament\Resources\CourseResource;
use App\Filament\Resources\CourseResource\Widgets\CourseOverview;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageCourses extends ManageRecords
{
    protected static string $resource = CourseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    protected function getHeaderWidgets(): array
    {
        return [
            CourseOverview::class,
        ];
    }
}
