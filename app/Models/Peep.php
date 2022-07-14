<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peep extends Model
{
    use HasFactory;
    public function comment(){
        return $this->hasMany(Comment::class);
    }

    public function post(){
        return $this->hasMany(Post::class);
    }
}
