<?php

namespace App\Filament\Resources\KeluarBarangs\Pages;

use App\Filament\Resources\KeluarBarangs\KeluarBarangResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListKeluarBarangs extends ListRecords
{
    protected static string $resource = KeluarBarangResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
