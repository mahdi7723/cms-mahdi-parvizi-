<?php

namespace App\Models;

use App\Models\tag as ModelsTag;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use \Znck\Eloquent\Traits\belongsToThrough;
class Post extends Model
{

    use HasFactory,
        BelongsToThrough;

        protected $fillable = [
            'author_id',
            'category_id',
            'title',
            'slug',
            'body',
            'image',
            'status',
            'release_at',
            'is_commentable',
        ];


    public function user()
    {
        return $this->belongsToThrough(User::class, Author::class);
    }
    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class,'commentable');
    }
    public function tags()
    {
        return $this->belongsToMany(tag::class);
    }

    public function getMainImageUrlAttribute():string
    {
        return 'image/posts/'.$this->image;
    }
    public function getCreatedAtJalaliAttribute(): string {
        //$this->created_at_jalali
        return ($this->created_at)->format('j F Y');
    }

}
