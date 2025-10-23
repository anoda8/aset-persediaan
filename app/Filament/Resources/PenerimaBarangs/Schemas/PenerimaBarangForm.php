<?php

namespace App\Filament\Resources\PenerimaBarangs\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PenerimaBarangForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_penerima')
                    ->required(),
                TextInput::make('nip')->nullable(),
            ]);
    }
}
