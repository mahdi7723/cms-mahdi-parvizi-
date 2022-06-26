<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use phpDocumentor\Reflection\DocBlock\Tag;
use \Znck\Eloquent\Traits\belongsToThrough;
class Post extends Model
{

    use HasFactory;
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsToThrough(User::class, Author::class,'user_id','author_id');
    }
    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function category()
    {
        return $this->hasOne(Category::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class,'message');
    }
    public function tags()
    {
        return $this->hasMany(Tag::class);
    }
}
