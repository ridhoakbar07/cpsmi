<?php

namespace App\Filament\Clusters\Blog\Resources\BlogPostResource\Pages;

use App\Filament\Clusters\Blog\Resources\BlogPostResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBlogPosts extends ListRecords
{
    protected static string $resource = BlogPostResource::class;
    protected static ?string $title = 'Posts';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
