<?php

namespace App\Filament\Resources\DocumentResource\Pages;

use App\Filament\Resources\NormResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDocument extends CreateRecord
{
    protected static string $resource = NormResource::class;
}
