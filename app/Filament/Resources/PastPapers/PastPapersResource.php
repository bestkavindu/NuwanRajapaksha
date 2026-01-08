<?php

namespace App\Filament\Resources\PastPapers;

use App\Filament\Resources\PastPapers\Pages\CreatePastPapers;
use App\Filament\Resources\PastPapers\Pages\EditPastPapers;
use App\Filament\Resources\PastPapers\Pages\ListPastPapers;
use App\Filament\Resources\PastPapers\Schemas\PastPapersForm;
use App\Filament\Resources\PastPapers\Tables\PastPapersTable;
use App\Models\PastPapers;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PastPapersResource extends Resource
{
    protected static ?string $model = PastPapers::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'PastPapers';

    public static function form(Schema $schema): Schema
    {
        return PastPapersForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PastPapersTable::configure($table);
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
            'index' => ListPastPapers::route('/'),
            'create' => CreatePastPapers::route('/create'),
            'edit' => EditPastPapers::route('/{record}/edit'),
        ];
    }
}
