<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'description2',
        'description3',
        'description4',
        'description5',
        'description6',
        'category_id',
        'image'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    protected static function boot()
    {
        parent::boot();

        // Automatically generate slug on save or update
        static::saving(function ($blog) {
            if (!$blog->slug) {
                $blog->slug = $blog->generateUniqueSlug($blog->title);
            }
        });
    }

    // Function to generate a unique slug
    public function generateUniqueSlug($title)
    {
        $slug = Str::slug($title);
        $count = Blog::where('slug', 'LIKE', "{$slug}%")->count();

        return $count ? "{$slug}-{$count}" : $slug;
    }
}
