<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    use HasFactory;

    protected $guarded = ['id'];

    public function comment()
    {
        return $this->morphTo(Comment::class, 'commentable');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
