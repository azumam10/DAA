<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PembelianResource\Pages;
use App\Models\Pembelian;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Form; // menggunakan Filament\Forms\Form dari starter kit
use Filament\Tables\Table; // menggunakan Filament\Tables\Table dari starter kit

class PembelianResource extends Resource
{
    protected static ?string $model = Pembelian::class;
    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';
    protected static ?string $navigationLabel = 'Pembelian';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Select::make('pembeli_id')
                ->relationship('pembeli', 'nama')
                ->required()
                ->label('Pembeli'),

            Select::make('toko_jams_id')
                ->relationship('tokoJam', 'nama')
                ->required()
                ->label('Toko Jam'),

            TextInput::make('jumlah')
                ->numeric()
                ->default(1)
                ->minValue(1)
                ->label('Jumlah')
                ->required(),

            DatePicker::make('tanggal_pembelian')
                ->label('Tanggal Pembelian')
                ->default(now())
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('pembeli.nama')
                ->label('Pembeli')
                ->sortable()
                ->searchable(),

            TextColumn::make('tokoJam.nama')
                ->label('Toko Jam')
                ->sortable()
                ->searchable(),

            TextColumn::make('jumlah')
                ->label('Jumlah')
                ->sortable(),

            TextColumn::make('tanggal_pembelian')
                ->label('Tanggal Pembelian')
                ->date()
                ->sortable(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPembelians::route('/'),
            'create' => Pages\CreatePembelian::route('/create'),
            'edit' => Pages\EditPembelian::route('/{record}/edit'),
        ];
    }
}
