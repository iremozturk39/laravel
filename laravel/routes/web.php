<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\TempController;
Route::get('/tmp', [TempController::class, 'tmpFunction']);


Route::resource('customers', CustomerController::class);
Route::resource('exercises', ExerciseController::class);
Route::resource('activities', ActivityController::class);
Route::resource('meals', MealController::class);
Route::resource('foods', FoodController::class);