<?php

namespace App\Filament\Resources\KeluarBarangs;

use App\Filament\Resources\KeluarBarangs\Pages\CreateKeluarBarang;
use App\Filament\Resources\KeluarBarangs\Pages\EditKeluarBarang;
use App\Filament\Resources\KeluarBarangs\Pages\ListKeluarBarangs;
use App\Filament\Resources\KeluarBarangs\Pages\ViewKeluarBarang;
use App\Filament\Resources\KeluarBarangs\Schemas\KeluarBarangForm;
use App\Filament\Resources\KeluarBarangs\Schemas\KeluarBarangInfolist;
use App\Filament\Resources\KeluarBarangs\Tables\KeluarBarangsTable;
use App\Models\KeluarBarang;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class KeluarBarangResource extends Resource
{
    protected static ?string $model = KeluarBarang::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Keluar Barang';

    protected static ?string $navigationLabel = 'Barang Keluar';

    public static function form(Schema $schema): Schema
    {
        return KeluarBarangForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return KeluarBarangInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return KeluarBarangsTable::configure($table);
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
            'index' => ListKeluarBarangs::route('/'),
            'create' => CreateKeluarBarang::route('/create'),
            'view' => ViewKeluarBarang::route('/{record}'),
            'edit' => EditKeluarBarang::route('/{record}/edit'),
        ];
    }
}
