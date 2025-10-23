<?php

namespace App\Filament\Resources\KeluarBarangs\Pages;

use App\Filament\Resources\KeluarBarangs\KeluarBarangResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditKeluarBarang extends EditRecord
{
    protected static string $resource = KeluarBarangResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
