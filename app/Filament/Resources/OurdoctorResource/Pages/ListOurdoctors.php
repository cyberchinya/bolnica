<?php

namespace App\Filament\Resources\OurdoctorResource\Pages;

use App\Filament\Resources\OurdoctorResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOurdoctors extends ListRecords
{
    protected static string $resource = OurdoctorResource::class;

    protected static ?string $title = 'Список врачей';

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
