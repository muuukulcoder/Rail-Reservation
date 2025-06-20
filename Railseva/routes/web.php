<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::view('/index','index');
Route::view('/login','login');

Route::view('/loading', 'loading');
Route::view('/signup','signup');

Route::post('/signup',[UserController::class,'signup'])->name('users.store');


