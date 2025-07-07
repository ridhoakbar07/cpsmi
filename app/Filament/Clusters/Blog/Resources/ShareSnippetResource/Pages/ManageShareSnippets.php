<?php

namespace App\Filament\Clusters\Blog\Resources\ShareSnippetResource\Pages;

use App\Filament\Clusters\Blog\Resources\ShareSnippetResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageShareSnippets extends ManageRecords
{
    protected static string $resource = ShareSnippetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
