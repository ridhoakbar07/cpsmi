<?php

namespace App\Filament\Clusters\Blog\Resources\BlogCategoryResource\Pages;

use App\Filament\Clusters\Blog\Resources\BlogCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageBlogCategories extends ManageRecords
{
    protected static string $resource = BlogCategoryResource::class;

    protected static ?string $title = 'Categories';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
