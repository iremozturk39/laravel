<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    protected $guarded = ['id'];
    function customer(){
        return $this->belongsTo(Customer::class);
    }

    function food(){
        return $this->belongsTo(Food::class);
    }
}
