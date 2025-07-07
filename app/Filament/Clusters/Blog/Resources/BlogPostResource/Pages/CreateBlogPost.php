<?php

namespace App\Filament\Clusters\Blog\Resources\BlogPostResource\Pages;

use App\Filament\Clusters\Blog\Resources\BlogPostResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBlogPost extends CreateRecord
{
    protected static string $resource = BlogPostResource::class;
}
