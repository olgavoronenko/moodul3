<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ContactMessageResource\Pages;
use App\Filament\Admin\Resources\ContactMessageResource\RelationManagers;
use App\Models\ContactMessage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;

class ContactMessageResource extends Resource
{
    protected static ?string $model = ContactMessage::class;
    protected static ?string $navigationLabel = 'Contact messages';
    protected static ?string $pluralModelLabel = 'Contact messages';
    protected static ?string $navigationGroup = 'Website';


    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
{
    return $form->schema([
        TextInput::make('name')
            ->label('Name')
            ->disabled(),

        TextInput::make('email')
            ->label('Email')
            ->disabled(),

        Textarea::make('message')
            ->label('Message')
            ->rows(6)
            ->disabled(),
    ]);
}

    public static function table(Table $table): Table
{
    return $table
        ->columns([
            TextColumn::make('name')
                ->label('Name')
                ->searchable(),

            TextColumn::make('email')
                ->label('Email')
                ->searchable(),

            TextColumn::make('message')
                ->label('Message')
                ->limit(50),

            TextColumn::make('created_at')
                ->label('Date')
                ->dateTime('d.m.Y H:i')
                ->sortable(),
        ])
        ->actions([
            Tables\Actions\ViewAction::make(), // лучше чем Edit
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
            'index' => Pages\ListContactMessages::route('/'),
            'create' => Pages\CreateContactMessage::route('/create'),
            'edit' => Pages\EditContactMessage::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool
{
    return false;
}
}
