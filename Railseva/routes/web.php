<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::view('/index','index');

Route::view('/loading', 'loading');
Route::view('/signup','signup');
Route::view('/login','login');