<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TempController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\MealController;
use App\Http\Controllers\FoodController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello Laravel!';    
});

Route::get('/hello/{name}/info', function ($name) {
    return 'Hello ' . $name . ', welcome to Laravel!';
})

use App\Http\Controllers\TempController;
Route::get('/tmp', [TempController::class, 'tmpFunction']);


Route::resource('customers', CustomerController::class);
Route::resource('exercises', ExerciseController::class);
Route::resource('activities', ActivityController::class);
Route::resource('meals', MealController::class);
Route::resource('foods', FoodController::class);