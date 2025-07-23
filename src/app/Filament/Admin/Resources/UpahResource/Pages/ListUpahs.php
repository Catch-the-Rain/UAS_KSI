<?php

namespace App\Filament\Admin\Resources\UpahResource\Pages;

use App\Filament\Admin\Resources\UpahResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUpahs extends ListRecords
{
    protected static string $resource = UpahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
