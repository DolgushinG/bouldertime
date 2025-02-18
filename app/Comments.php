<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    public function users(){
        return $this->belongsToMany('App\Models\User')->get();
    }
}
