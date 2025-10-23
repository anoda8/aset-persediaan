<?php

namespace App\Filament\Resources\KeluarBarangs\Schemas;

use App\Models\PenerimaBarang;
use App\Models\StokBarang;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class KeluarBarangForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('kode_barang')->label('Barang')
                    ->options(StokBarang::all()->pluck('nama_barang', 'kode_barang'))
                    ->searchable()
                    ->required(),
                TextInput::make('jumlah_keluar')
                    ->required()
                    ->numeric(),
                DatePicker::make('tanggal_keluar')->default(now())
                    ->required(),
                 Select::make('id_penerima')->label('Penerima')
                    ->options(PenerimaBarang::all()->pluck('nama', 'nip'))
                    ->searchable()
                    ->required(),
                TextInput::make('author')->default(auth()->user()->id)->disabled()
                    ->required(),
            ]);
    }
}
