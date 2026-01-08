<?php

namespace App\Filament\Resources\PastPapers\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PastPapersForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Title')
                    ->required()
                    ->maxLength(255),
                TextInput::make('description')
                    ->label('Description')
                    ->maxLength(255),
                TextInput::make('year')
                    ->label('Year')
                    ->required()
                    ->maxLength(4),
                FileUpload::make('file')
                    ->label('File')
                    ->required()
                    ->disk('public')
                    ->maxLength(255),
            ]);
    }
}
