<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model{
    use HasFactory;

    protected $fillable = ['title', 'excerpt', 'body', 'slug', 'category_id'];

    public function getRouteKeyName(){
        return "slug";
    }

    /**
     * Get the category that owns the Post
     *
     */
    public function category(): BelongsTo {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function author(): BelongsTo {
        return $this->belongsTo(User::class, 'user_id');
    }
}
