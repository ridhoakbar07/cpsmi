<?php

namespace App\Filament\Clusters\Blog\Resources\CategoryResource\Pages;

use App\Filament\Clusters\Blog\Resources\CategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageCategories extends ManageRecords
{
    protected static string $resource = CategoryResource::class;

    protected static ?string $title = 'Categories';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
