<?php

namespace App\Filament\Resources\AdminBolnResource\Pages;

use App\Filament\Resources\AdminBolnResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAdminBolns extends ListRecords
{
    protected static ?string $title = 'Список администрации больницы';

    protected static string $resource = AdminBolnResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
