<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'main_body',
        'status',
        'is_ActivComment',
        'Release date',
    ];
    public function Author()
    {
        return $this->hasOne(Author::class);
    }
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
