<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TempController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function() {
    return 'Hello, Laravel!';
});

Route::get('/hello/{name}', function($name) {
    return 'Hello, ' . $name . ' !!!';

});

Route::get('/tmp', [TempController::class, 'tmpFunction']);
