<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebProfile extends Model
{
    protected $fillable = [
        'nama_perusahaan',
        'alamat',
        'telp',
        'kontak_mail',
        'logo',
        'favicon',
        'sejarah',
        'visi',
        'misi',
        'struktur_organisasi',
        'personil',
        'quick_links',
    ];

    protected $casts = [
        'kontak_email' => 'json',
        'quick_links' => 'json',
        'personil' => 'json',
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
