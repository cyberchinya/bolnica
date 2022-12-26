<?php

namespace App\Filament\Resources\VakancyResource\Pages;

use App\Filament\Resources\VakancyResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVakancy extends EditRecord
{
    protected static string $resource = VakancyResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
