<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StudentResource\Pages;
use App\Filament\Resources\StudentResource\RelationManagers;
use App\Models\Student;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StudentResource extends Resource
{
    protected static ?string $model = Student::class;

    protected static ?string $navigationIcon = 'heroicon-o-rocket-launch';
    protected static ?int $navigationSort = 2;
    protected static ?string $navigationGroup = 'المسابقات والطلبه المشاركين بها';

    public static function form(Form $form): Form
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
                    Select::make('competition_id')
                        ->relationship(name: 'competition', titleAttribute: 'name'),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
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
                    ->limit(50),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListStudents::route('/'),
            'create' => Pages\CreateStudent::route('/create'),
            'edit' => Pages\EditStudent::route('/{record}/edit'),
        ];
    }
}
