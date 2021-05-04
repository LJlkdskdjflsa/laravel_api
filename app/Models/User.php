<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    //property
    protected $fillable = [
        'name',
        'email',
        'password',
        'post_count',
        'like_score',
        'dislike_score',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //relation
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
    public function commands(): HasMany
    {
        return $this->hasMany(Command::class);
    }
    public function votes(): HasMany
    {
        return $this->hasMany(Vote::class);
    }

    // function
    public function getAvatar(){
/*
        $firstCharacter = $this->email[0];
        if (is_numeric($firstCharacter)) {
            $integerToUse = ord(strtolower($firstCharacter)) - 21;
        } else {
            $integerToUse = ord(strtolower($firstCharacter)) - 96;
        }
        return 'https://s.gravatar.com/avatar/'.md5($this->email)
            .'?s=200'
            .'&d=https://s3.amazonaws.com/laracasts/images/forum/avatars/default-avatar-'
            .$integerToUse
            .'.png';*/
    }
}
