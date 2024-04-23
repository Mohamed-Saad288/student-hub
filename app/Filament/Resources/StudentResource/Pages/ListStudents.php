<?php

namespace App\Filament\Resources\StudentResource\Pages;

use App\Filament\Resources\CompetitionResource\Widgets\CompetitionOverview;
use App\Filament\Resources\StudentResource;
use App\Filament\Resources\StudentResource\Widgets\StudentOverview;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStudents extends ListRecords
{
    protected static string $resource = StudentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    protected function getHeaderWidgets(): array
    {
        return [
            StudentOverview::class,
        ];
    }
}
