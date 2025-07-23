<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\UpahResource\Pages;
use App\Models\Upah;
use App\Models\Karyawan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

class UpahResource extends Resource
{
    protected static ?string $model = Upah::class;

    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';
    protected static ?string $navigationLabel = 'Data Upah';
    protected static ?string $pluralModelLabel = 'Upah';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('karyawan_id')
                    ->label('Karyawan')
                    ->options(Karyawan::pluck('name', 'id'))
                    ->searchable()
                    ->required(),

                TextInput::make('bulan')
                    ->label('Bulan')
                    ->required()
                    ->maxLength(20),

                TextInput::make('tahun')
                    ->label('Tahun')
                    ->numeric()
                    ->required(),

                TextInput::make('gaji_pokok')
                    ->label('Gaji Pokok')
                    ->numeric()
                    ->required(),

                TextInput::make('tunjangan')
                    ->label('Tunjangan')
                    ->numeric()
                    ->default(0),

                TextInput::make('potongan')
                    ->label('Potongan')
                    ->numeric()
                    ->default(0),

                TextInput::make('total_gaji')
                    ->label('Total Gaji')
                    ->numeric()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('pegawai.name')
                    ->label('Nama Karyawan')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('bulan'),
                Tables\Columns\TextColumn::make('tahun'),
                Tables\Columns\TextColumn::make('gaji_pokok')->money('IDR', true),
                Tables\Columns\TextColumn::make('tunjangan')->money('IDR', true),
                Tables\Columns\TextColumn::make('potongan')->money('IDR', true),
                Tables\Columns\TextColumn::make('total_gaji')->money('IDR', true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListUpahs::route('/'),
            'create' => Pages\CreateUpah::route('/create'),
            'edit' => Pages\EditUpah::route('/{record}/edit'),
        ];
    }
}
