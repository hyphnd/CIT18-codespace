<?php


use App\Http\Controllers\GreetController;

Route::get('/hello', function () {
    return 'Hello me!';
});

Route::get('/greet', [GreetController::class, 'greet']);