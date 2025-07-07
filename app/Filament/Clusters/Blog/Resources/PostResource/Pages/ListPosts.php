<?php

namespace App\Filament\Clusters\Blog\Resources\PostResource\Pages;

use App\Filament\Clusters\Blog\Resources\PostResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPosts extends ListRecords
{
    protected static string $resource = PostResource::class;
    protected static ?string $title = 'Posts';

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
