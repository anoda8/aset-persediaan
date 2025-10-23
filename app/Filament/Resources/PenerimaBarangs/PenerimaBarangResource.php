<?php

namespace App\Filament\Resources\PenerimaBarangs;

use App\Filament\Resources\PenerimaBarangs\Pages\CreatePenerimaBarang;
use App\Filament\Resources\PenerimaBarangs\Pages\EditPenerimaBarang;
use App\Filament\Resources\PenerimaBarangs\Pages\ListPenerimaBarangs;
use App\Filament\Resources\PenerimaBarangs\Schemas\PenerimaBarangForm;
use App\Filament\Resources\PenerimaBarangs\Tables\PenerimaBarangsTable;
use App\Models\PenerimaBarang;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PenerimaBarangResource extends Resource
{
    protected static ?string $model = PenerimaBarang::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Penerima Barang';

    protected static ?string $navigationLabel = 'Penerima Barang';

    public static function form(Schema $schema): Schema
    {
        return PenerimaBarangForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PenerimaBarangsTable::configure($table);
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
            'index' => ListPenerimaBarangs::route('/'),
            // 'create' => CreatePenerimaBarang::route('/create'),
            // 'edit' => EditPenerimaBarang::route('/{record}/edit'),
        ];
    }
}
