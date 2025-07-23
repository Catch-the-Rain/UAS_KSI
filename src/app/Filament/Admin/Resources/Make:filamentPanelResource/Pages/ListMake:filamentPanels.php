<?php

namespace App\Filament\Admin\Resources\Make:filamentPanelResource\Pages;

use App\Filament\Admin\Resources\Make:filamentPanelResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMake:filamentPanels extends ListRecords
{
    protected static string $resource = Make:filamentPanelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
