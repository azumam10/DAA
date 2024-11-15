<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\TokoJamResource\Pages;
use App\Filament\Admin\Resources\TokoJamResource\RelationManagers;
use App\Models\TokoJam;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TokoJamResource extends Resource
{
    protected static ?string $model = TokoJam::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('Merek')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Tipe')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Harga')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('Merek')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Tipe')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Harga')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListTokoJams::route('/'),
            'create' => Pages\CreateTokoJam::route('/create'),
            'edit' => Pages\EditTokoJam::route('/{record}/edit'),
        ];
    }
}
