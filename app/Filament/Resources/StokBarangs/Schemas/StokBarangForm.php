<?php

namespace App\Filament\Resources\StokBarangs\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class StokBarangForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('kode_barang')
                    ->label('Kode Barang')
                    ->required()
                    ->maxLength(100),
                TextInput::make('nama_barang')
                    ->label('Nama Barang')
                    ->required()
                    ->maxLength(255),
                TextInput::make('satuan')
                    ->label('Satuan')
                    ->required()
                    ->maxLength(50),
                TextInput::make('jumlah_stok')
                    ->label('Jumlah Stok')
                    ->required()
                    ->numeric()
                    ->minValue(0)
                    ->disabledOn('edit'),
            ]);
    }
}
