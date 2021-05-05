<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    //property
    protected $guarded = [];

    //relation
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function commands(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Command::class);
    }

    //function
    public static function check($id)
    {
        $post = Post::where('id', '=', $id)->first();
        if ($post === null) {
            return false;
        }
        return true;
    }
}
