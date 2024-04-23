<?php

namespace App\Filament\Widgets;

use App\Models\Course;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class CourseOrders extends BaseWidget
{
    protected static ?int $sort = 6;
    protected int | string | array $columnSpan = 'full';



    public function table(Table $table): Table
    {
        return $table
            ->query(Course::query())
            ->defaultSort('created_at','desc')
            ->columns([
                TextColumn::make('name')
                    ->sortable()
                    ->searchable()
                    ->limit(50),
                TextColumn::make('instructor'),
                                TextColumn::make('link')
                ->limit(15)

            ]);
    }
}
