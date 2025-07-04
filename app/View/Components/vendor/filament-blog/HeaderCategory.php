<?php

namespace App\View\Components\Vendor\FilamentBlog;

use Illuminate\View\Component;

class HeaderCategory extends Component
{
    public function render()
    {
        return view('filament-blog::components.header-category', [
            'categories' => \Firefly\FilamentBlog\Models\Category::all(),
        ]);
    }
}
