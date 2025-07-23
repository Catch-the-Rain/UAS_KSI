<?php

namespace App\Filament\Admin\Resources\UpahResource\Pages;

use App\Filament\Admin\Resources\UpahResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUpah extends EditRecord
{
    protected static string $resource = UpahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
