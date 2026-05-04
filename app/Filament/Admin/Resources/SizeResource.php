<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\SizeResource\Pages;
use App\Filament\Admin\Resources\SizeResource\RelationManagers;
use App\Models\Size;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;

class SizeResource extends Resource
{
    protected static ?string $model = Size::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
{
    return $form->schema([
        TextInput::make('name')
            ->label('Size')
            ->required()
            ->maxLength(10),
    ]);
}

   public static function table(Table $table): Table
{
    return $table
        ->columns([
            TextColumn::make('name')
                ->label('Name')
                ->searchable()
                ->sortable(),

            TextColumn::make('created_at')
                ->label('Created')
                ->dateTime('d.m.Y')
                ->sortable(),
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListSizes::route('/'),
            'create' => Pages\CreateSize::route('/create'),
            'edit' => Pages\EditSize::route('/{record}/edit'),
        ];
    }
}
