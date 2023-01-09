<?php

namespace App\Filament\Resources\BannersResource\Pages;

use App\Filament\Resources\BannersResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBanners extends CreateRecord
{
    protected static ?string $title = 'Публикация баннеров';

    protected static string $resource = BannersResource::class;
}
