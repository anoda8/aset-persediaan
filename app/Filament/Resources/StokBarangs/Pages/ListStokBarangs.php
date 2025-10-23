<?php

namespace App\Filament\Resources\StokBarangs\Pages;

use App\Filament\Resources\StokBarangs\StokBarangResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Contracts\Support\Htmlable;

class ListStokBarangs extends ListRecords
{
    protected static string $resource = StokBarangResource::class;

    public function getTitle(): string|Htmlable
    {
        return 'Daftar Stok Barang';
    }

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()->label('Tambah Stok Barang'),
        ];
    }
}
