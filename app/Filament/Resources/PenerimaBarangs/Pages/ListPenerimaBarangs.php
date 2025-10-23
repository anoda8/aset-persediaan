<?php

namespace App\Filament\Resources\PenerimaBarangs\Pages;

use App\Filament\Resources\PenerimaBarangs\PenerimaBarangResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPenerimaBarangs extends ListRecords
{
    protected static string $resource = PenerimaBarangResource::class;

    public function getTitle(): string
    {
        return 'Daftar Penerima Barang';
    }

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
