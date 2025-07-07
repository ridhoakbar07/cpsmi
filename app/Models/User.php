<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Firefly\FilamentBlog\Traits\HasBlog;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use MixCode\FilamentMulti2fa\Enums\TwoFactorAuthType;
use MixCode\FilamentMulti2fa\Traits\UsingTwoFA;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements FilamentUser, MustVerifyEmail
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasRoles, UsingTwoFA;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $guarded = [
        'two_factor_type',
        'two_factor_secret',
        'two_factor_recovery_codes',
        'two_factor_sent_at',
        'two_factor_expires_at',
        'two_factor_confirmed_at',
    ];

    protected $casts = [
        'two_factor_type' => TwoFactorAuthType::class,
        'two_factor_sent_at' => 'datetime',
        'two_factor_expires_at' => 'datetime',
        'two_factor_confirmed_at' => 'datetime',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function canAccessPanel(Panel $panel): bool
    {
        return true;
    }

    public function canComment(): bool
    {
        // your conditional logic here
        return true;
    }
}
