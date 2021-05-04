<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vote extends Model
{
    use HasFactory;

    //property
    protected $guarded = [];

    //relation
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
    public function command(): BelongsTo
    {
        return $this->belongsTo(Command::class);
    }
}
