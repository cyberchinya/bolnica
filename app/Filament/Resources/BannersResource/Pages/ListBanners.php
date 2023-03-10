<?php

namespace App\Filament\Resources\BannersResource\Pages;

use App\Filament\Resources\BannersResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBanners extends ListRecords
{
    protected static ?string $title = 'Список баннеров на сайте';

    protected static string $resource = BannersResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
