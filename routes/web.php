<?php

use Illuminate\Support\Facades\Route;

use App\Models\Info;
use App\Http\Controllers\GreetController;
use App\Http\Controllers\InfoController;


Route::get('/', function(){
    return view('Ello');
});
Route::get('/hello', function () {
    return 'Hello me!';
});

Route::get('/greet', [GreetController::class, 'greet']);

Route::resource('Info', InfoController::class);
