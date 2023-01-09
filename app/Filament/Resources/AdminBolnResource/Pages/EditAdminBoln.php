<?php

namespace App\Filament\Resources\AdminBolnResource\Pages;

use App\Filament\Resources\AdminBolnResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAdminBoln extends EditRecord
{
    protected static ?string $title = 'Редактирование администрации';

    protected static string $resource = AdminBolnResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
