<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Post\{ Post, Category };

class User extends Authenticatable
{
    use HasFactory;

    // public function getRouteKeyName(){
    //     return 'username';
    // }
    /**
     * Get all of the Post for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function post()
    {
        return $this->hasMany(Post::class, 'user_id', 'id');
    }
}
