<?php

namespace App\Filament\Resources\StokBarangs\Pages;

use App\Filament\Resources\StokBarangs\StokBarangResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Schemas\Components\Form;
use Filament\Schemas\Schema;

class CreateStokBarang extends CreateRecord
{
    protected static string $resource = StokBarangResource::class;
}
