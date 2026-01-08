<?php

namespace App\Filament\Resources\PastPapers\Pages;

use App\Filament\Resources\PastPapers\PastPapersResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPastPapers extends EditRecord
{
    protected static string $resource = PastPapersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
