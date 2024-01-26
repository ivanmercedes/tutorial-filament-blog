<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the category that owns the Post
     *
     * @return BelongsTo<int, Category>
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the user that owns the Post
     *
     * @return BelongsTo<int, User>
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
