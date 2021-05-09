<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
/**
 *
 * @OA\Schema(
 * @OA\Xml(name="Vote"),
 * @OA\Property(property="id", type="integer", readOnly="true", example="1"),
 * @OA\Property(property="user_id", type="integer", example="1"),
 * @OA\Property(property="post_id", type="integer", example="1"),
 * @OA\Property(property="command_id", type="integer", example="1"),
 * @OA\Property(property="status", type="integer", example="1"),
 * @OA\Property(property="content", type="string", example="Johnas asdfa asdfasgw"),
 * @OA\Property(property="created_at", ref="#/components/schemas/BaseModel/properties/created_at"),
 * @OA\Property(property="updated_at", ref="#/components/schemas/BaseModel/properties/updated_at"),
 * @OA\Property(property="deleted_at", ref="#/components/schemas/BaseModel/properties/deleted_at")
 * )
 *
 * Class Vote
 *
 */
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

    public static function check($id)
    {
        $vote = Vote::where('id', '=', $id)->first();
        if ($vote === null) {
            return false;
        }
        return true;
    }
}
