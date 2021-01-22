<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikeDislike extends Model
{
    public function likes(){

        return $this->hasMany('App\Models\LikeDislike','post_id')->sum('like');
    }
    // Dislikes
    public function dislikes(){
        return $this->hasMany('App\Models\LikeDislike','post_id')->sum('dislike');
    }
}
