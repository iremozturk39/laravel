<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\TempController;
Route::get('/tmp', [TempController::class, 'tmpFunction']);
