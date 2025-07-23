<?php

namespace App\Filament\Admin\Resources\Make:filamentPanelResource\Pages;

use App\Filament\Admin\Resources\Make:filamentPanelResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMake:filamentPanel extends CreateRecord
{
    protected static string $resource = Make:filamentPanelResource::class;
}
