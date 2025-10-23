<?php

namespace App\Filament\Resources\KeluarBarangs\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class KeluarBarangInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('kode_barang'),
                TextEntry::make('jumlah_keluar')
                    ->numeric(),
                TextEntry::make('tanggal_keluar')
                    ->date(),
                TextEntry::make('id_penerima')
                    ->numeric(),
                TextEntry::make('author')
                    ->numeric(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
