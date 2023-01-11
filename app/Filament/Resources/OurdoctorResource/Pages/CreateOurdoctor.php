<?php

namespace App\Filament\Resources\OurdoctorResource\Pages;

use App\Filament\Resources\OurdoctorResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOurdoctor extends CreateRecord
{
    protected static ?string $title = 'Создать объявление';

    protected static string $resource = OurdoctorResource::class;
}
