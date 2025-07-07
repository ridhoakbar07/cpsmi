<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    protected $fillable = [
        'user_id',
        'post_id',
        'comment',
        'approved',
        'approved_at',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'post_id' => 'integer',
        'approved' => 'boolean',
        'approved_at' => 'datetime',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo('users', 'user_id');
    }

    public function post(): BelongsTo
    {
        return $this->belongsTo(Comment::class);
    }

    public function scopeApproved(Builder $query)
    {
        return $query->where('approved', true);
    }
}
