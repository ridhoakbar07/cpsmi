<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebSetting extends Model
{
    protected $fillable = [
        'title',
        'description',
        'logo',
        'favicon',
        'organization_name',
        'google_console_code',
        'google_analytic_code',
        'google_adsense_code',
        'quick_links',
    ];

    protected $casts = [
        'quick_links' => 'json',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    protected function getLogoImageAttribute()
    {
        return asset('storage/' . $this->logo);
    }

    protected function getFavIconImageAttribute()
    {
        return asset('storage/' . $this->favicon);
    }
}
