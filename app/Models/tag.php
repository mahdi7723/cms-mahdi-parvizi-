<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    protected $guarded = ['id'];
    use HasFactory;
    public $timestamps = false;
    public function posts()
    {
        return $this->belongsToMany(post::class,'post_tag','tag_id','post_id');
    }
}
