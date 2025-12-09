<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Meal;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;
    //protected $fillable = ['name', 'surname', 'birthYear', 'gender'];
    protected $guarded = ['id'];
    function activities(){
        return $this->hasMany(Activity::class);
    }

    function meals(){
        return $this->hasMany(Meal::class);
    }

}


