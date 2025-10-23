<?php

namespace App\Filament\Resources\KeluarBarangs\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class KeluarBarangForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('kode_barang')
                    ->required(),
                TextInput::make('jumlah_keluar')
                    ->required()
                    ->numeric(),
                DatePicker::make('tanggal_keluar')
                    ->required(),
                TextInput::make('id_penerima')
                    ->required()
                    ->numeric(),
                TextInput::make('author')
                    ->required()
                    ->numeric(),
            ]);
    }
}
