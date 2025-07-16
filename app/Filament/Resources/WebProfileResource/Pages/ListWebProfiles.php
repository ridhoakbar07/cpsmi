<?php

namespace App\Filament\Resources\WebProfileResource\Pages;

use App\Filament\Resources\WebProfileResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWebProfiles extends ListRecords
{
    protected static string $resource = WebProfileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
