<?php

namespace App\Filament\Resources\DocumentResource\Pages;

use App\Filament\Resources\NormResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDocument extends EditRecord
{
    protected static string $resource = NormResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
