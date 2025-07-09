<?php

namespace App\Filament\Clusters\Blog\Resources\ShareSnippetResource\Pages;

use App\Filament\Clusters\Blog\Resources\ShareSnippetResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Support\HtmlString;

class ManageShareSnippets extends ManageRecords
{
    protected static string $resource = ShareSnippetResource::class;

    public function getSubheading(): string|Htmlable|null
    {
        return new HtmlString(<<<HTML
            <span class="text-black">For social media share, please visit <a href="https://platform.sharethis.com" class="text-orange-500 underline font-semibold">Sharethis</a> and generate the JS Script and HTML code and save from our share snippet section.</span>
        HTML);
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
