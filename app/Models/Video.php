<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function comments()
    {
        return $this->morphMany(Comment::class,'commentable');
    }
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
    public function admin(){
        return $this->hasOneThrough(Admin::class, User::class,'id','user_id','author_id');
    }
    public function user()
    {
        return $this->hasOneThrough(User::class,Author::class,'user_id','id','author_id');
    }


}
