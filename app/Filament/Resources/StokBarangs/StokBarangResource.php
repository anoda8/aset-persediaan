<?php

namespace App\Filament\Resources\StokBarangs;

use App\Filament\Resources\StokBarangs\Pages\CreateStokBarang;
use App\Filament\Resources\StokBarangs\Pages\EditStokBarang;
use App\Filament\Resources\StokBarangs\Pages\ListStokBarangs;
use App\Filament\Resources\StokBarangs\Schemas\StokBarangForm;
use App\Filament\Resources\StokBarangs\Tables\StokBarangsTable;
use App\Models\StokBarang;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class StokBarangResource extends Resource
{
    protected static ?string $model = StokBarang::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Stok Barang';

    protected static ?string $navigationLabel = 'Stok Barang';

    public static function form(Schema $schema): Schema
    {
        return StokBarangForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return StokBarangsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListStokBarangs::route('/'),
            // 'create' => CreateStokBarang::route('/create'),
            // 'edit' => EditStokBarang::route('/{record}/edit'),
        ];
    }
}
