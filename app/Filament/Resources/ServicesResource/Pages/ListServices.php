<?php

namespace App\Filament\Resources\ServicesResource\Pages;

use App\Filament\Resources\ServicesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListServices extends ListRecords
{
    protected static string $resource = ServicesResource::class;

    protected static ?string $title = 'Тарифы на платные услуги';

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];

    }
}
