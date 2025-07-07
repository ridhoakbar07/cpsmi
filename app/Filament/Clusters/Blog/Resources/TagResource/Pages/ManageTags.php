<?php

namespace App\Filament\Clusters\Blog\Resources\TagResource\Pages;

use App\Filament\Clusters\Blog\Resources\TagResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageTags extends ManageRecords
{
    protected static string $resource = TagResource::class;

    protected static ?string $title = 'Tags';
    
    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
