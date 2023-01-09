<?php

namespace App\Filament\Resources\Covid19Resource\Pages;

use App\Filament\Resources\Covid19Resource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCovid19 extends EditRecord
{
    protected static ?string $title = 'Редактирование записи про корону';

    protected static string $resource = Covid19Resource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
