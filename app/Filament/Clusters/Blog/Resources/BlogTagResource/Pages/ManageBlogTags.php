<?php

namespace App\Filament\Clusters\Blog\Resources\BlogTagResource\Pages;

use App\Filament\Clusters\Blog\Resources\BlogTagResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageBlogTags extends ManageRecords
{
    protected static string $resource = BlogTagResource::class;

    protected static ?string $title = 'Tags';
    
    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
