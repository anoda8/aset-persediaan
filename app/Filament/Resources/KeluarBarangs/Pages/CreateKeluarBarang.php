<?php

namespace App\Filament\Resources\KeluarBarangs\Pages;

use App\Filament\Resources\KeluarBarangs\KeluarBarangResource;
use Filament\Actions\Action;
use Filament\Resources\Pages\CreateRecord;

class CreateKeluarBarang extends CreateRecord
{
    protected static string $resource = KeluarBarangResource::class;

    protected function getCreateFormAction(): Action
    {
        return parent::getCreateFormAction()->label('Simpan');
    }
}
