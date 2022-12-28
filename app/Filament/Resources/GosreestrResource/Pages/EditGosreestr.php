<?php

namespace App\Filament\Resources\GosreestrResource\Pages;

use App\Filament\Resources\GosreestrResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGosreestr extends EditRecord
{
    protected static string $resource = GosreestrResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
