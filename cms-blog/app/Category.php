<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //Catgeory has many posts
    
    public function posts(){
        return $this->hasMany('App\Post');
    }
}
