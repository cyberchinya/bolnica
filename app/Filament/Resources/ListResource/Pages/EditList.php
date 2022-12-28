<?php

namespace App\Filament\Resources\ListResource\Pages;

use App\Filament\Resources\ListResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditList extends EditRecord
{
    protected static string $resource = ListResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
