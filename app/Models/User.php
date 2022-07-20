<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'avatar',
        'last_login_at',
        'email',
        'password',
    ];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function admin()
    {
        return $this->hasOne(Admin::class);
    }
    public function author()
    {
        return $this->hasOne(Author::class);
    }
    public function videos()
    {
        return $this->hasManyThrough(Video::class,Author::class);
    }
    public function posts()
    {
        return $this->hasManyThrough(Post::class,Author::class);
    }

    public function getFullNameAttribute():string{
        return $this->first_name . " " . $this->last_name;
    }
}
