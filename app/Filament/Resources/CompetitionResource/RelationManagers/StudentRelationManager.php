<?php

namespace App\Filament\Resources\CompetitionResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StudentRelationManager extends RelationManager
{
    protected static string $relationship = 'student';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()->schema([
                    TextInput::make('name')
                    ->required()
                    ->string(),
                TextInput::make('phone')
                    ->required()
                    ->maxLength(11)
                    ->minLength(11),
                TextInput::make('college_id')
                    ->integer()
                    ->maxLength(8)
                    ->minLength(8)
                    ->required(),
                Select::make('level')
                    ->options([1, 2, 3,4])
                    ->required() ,
                TextInput::make('department')
                    ->required()
                    ->string(),
                    ])
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                    TextColumn::make('name')
                    ->searchable()
                    ->limit(20),
                TextColumn::make('college_id')
                    ->searchable()
                    ->limit(50),
                TextColumn::make('phone')
                    ->limit(11),
                TextColumn::make('department')
                    ->sortable()
                    ->searchable()
                    ->limit(20),
                TextColumn::make('level'),
                TextColumn::make('created_at')
                    ->sortable()
                    ->date()
                    ->limit(50)
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
