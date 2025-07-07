<?php

namespace App\Models;

use Firefly\FilamentBlog\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    protected $fillable = [
        'name',
        'slug',
    ];

    protected $casts = [
        'id' => 'integer',
    ];

    public function posts(): BelongsToMany
    {

        return $this->belongsToMany(Post::class, 'post_tag');
    }
}
