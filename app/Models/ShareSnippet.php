<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class ShareSnippet extends Model
{
    protected $fillable = [
        'script_code',
        'html_code',
    ];

    protected $casts = [
        'script_code' => 'string',
        'html_code' => 'string',
    ];

    public function scopeActive(Builder $query)
    {
        return $query->where('active', true);
    }
}
