<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
/**
 *
 * @OA\Schema(
 * @OA\Xml(name="Command"),
 * @OA\Property(property="id", type="integer", readOnly="true", example="1"),
 * @OA\Property(property="user_id", type="integer", example="1"),
 * @OA\Property(property="post_id", type="integer", example="1"),
 * @OA\Property(property="content", type="string", example="Johnas asdfa asdfasgw"),
 * @OA\Property(property="created_at", ref="#/components/schemas/BaseModel/properties/created_at"),
 * @OA\Property(property="updated_at", ref="#/components/schemas/BaseModel/properties/updated_at"),
 * @OA\Property(property="deleted_at", ref="#/components/schemas/BaseModel/properties/deleted_at")
 * )
 *
 * Class Command
 *
 */
class Command extends Model
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

    public function votes(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Vote::class);
    }

    //function
    public static function check($id)
    {
        $command = Command::where('id', '=', $id)->first();
        if ($command === null) {
            return false;
        }
        return true;
    }
}
