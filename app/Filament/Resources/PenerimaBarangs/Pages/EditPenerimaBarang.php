<?php

namespace App\Filament\Resources\PenerimaBarangs\Pages;

use App\Filament\Resources\PenerimaBarangs\PenerimaBarangResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPenerimaBarang extends EditRecord
{
    protected static string $resource = PenerimaBarangResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
