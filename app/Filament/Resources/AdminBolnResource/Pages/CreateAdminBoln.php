<?php

namespace App\Filament\Resources\AdminBolnResource\Pages;

use App\Filament\Resources\AdminBolnResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAdminBoln extends CreateRecord
{
    protected static ?string $title = 'Создание администрации больницы';

    protected static string $resource = AdminBolnResource::class;
}
