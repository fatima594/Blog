<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'comment',
        'name',
        'email',
        'website',
        'blog_id',
    ];

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}
