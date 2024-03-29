<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     *  Get all of the posts for the Category
     *
     *  @return BelongsTo<int, Post>
     */
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
}
