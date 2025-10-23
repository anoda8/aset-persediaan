<?php

namespace App\Filament\Resources\KeluarBarangs\Pages;

use App\Filament\Resources\KeluarBarangs\KeluarBarangResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewKeluarBarang extends ViewRecord
{
    protected static string $resource = KeluarBarangResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
