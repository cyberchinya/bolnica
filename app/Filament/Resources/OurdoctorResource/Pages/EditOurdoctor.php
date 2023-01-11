<?php

namespace App\Filament\Resources\OurdoctorResource\Pages;

use App\Filament\Resources\OurdoctorResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOurdoctor extends EditRecord
{
    protected static ?string $title = 'Редактирование врачей';

    protected static string $resource = OurdoctorResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
