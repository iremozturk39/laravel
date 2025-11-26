<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    function meals(){
        return $this->belongsToMany(Meal::class);
    }
}
