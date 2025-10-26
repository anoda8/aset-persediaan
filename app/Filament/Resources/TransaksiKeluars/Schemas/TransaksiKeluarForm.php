<?php

namespace App\Filament\Resources\TransaksiKeluars\Schemas;

use App\Models\PenerimaBarang;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TransaksiKeluarForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('id_penerima')->label('Penerima')
                    ->options(PenerimaBarang::all()->pluck('nama_penerima', 'nip'))
                    ->searchable()
                    ->required()
            ]);
    }
}
