<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{

    use HasFactory;

    protected $fillable = [
        'message',
        'commentable_id',
        'commentable_type',
        'user_id',
        'name',
    ];

    public function comment()
    {
        return $this->morphTo(Comment::class, 'commentable');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }



}
