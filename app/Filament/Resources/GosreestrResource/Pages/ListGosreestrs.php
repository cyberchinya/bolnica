<?php

namespace App\Filament\Resources\GosreestrResource\Pages;

use App\Filament\Resources\GosreestrResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGosreestrs extends ListRecords
{

    protected static string $resource = GosreestrResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
