<?php

namespace App\Filament\Admin\Resources\Make:filamentPanelResource\Pages;

use App\Filament\Admin\Resources\Make:filamentPanelResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMake:filamentPanel extends EditRecord
{
    protected static string $resource = Make:filamentPanelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
