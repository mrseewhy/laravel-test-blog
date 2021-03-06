<?php

namespace App\Models;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    public function comment(){
        return $this->hasMany(Comment::class);
    }

    public function peep(){
        return $this->belongsTo(Peep::class);
    }
}
