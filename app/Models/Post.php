<?php

namespace App\Models;

use CyrildeWit\EloquentViewable\InteractsWithViews;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use CyrildeWit\EloquentViewable\Contracts\Viewable;

class Post extends Model implements Viewable
{
    use InteractsWithViews;

    public function likes(){
        return $this->hasMany('App\Models\LikeDislike')->sum('like');
    }
    public function dislikes(){
        return $this->hasMany('App\Models\LikeDislike')->sum('dislike');
    }
}
