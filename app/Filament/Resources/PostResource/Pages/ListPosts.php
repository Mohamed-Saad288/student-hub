<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResiurceResource\Widgets\StatsOverview;
use App\Filament\Resources\PostResource;
use App\Filament\Resources\PostResource\Widgets\PostOverview;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPosts extends ListRecords
{
    protected static string $resource = PostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    protected function getHeaderWidgets(): array
    {
        return [
            PostOverview::class,
        ];
    }

}
