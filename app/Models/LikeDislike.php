<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikeDislike extends Model
{
    public function likes(){

        return $this->belongsToMany('App\Models\Post');
    }
    // Dislikes
    public function dislikes(){
        return $this->belongsToMany('App\Models\Post');
    }
}
