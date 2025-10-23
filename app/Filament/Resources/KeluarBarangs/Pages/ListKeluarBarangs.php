<?php

namespace App\Filament\Resources\KeluarBarangs\Pages;

use App\Filament\Resources\KeluarBarangs\KeluarBarangResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Contracts\Support\Htmlable;

class ListKeluarBarangs extends ListRecords
{
    protected static string $resource = KeluarBarangResource::class;

    public function getTitle(): string|Htmlable
    {
        return 'Daftar Barang Keluar';
    }

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
