<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
  //  return "Hello World my friend";
});

Route::get('/hello', function () {
    //return view('welcome');
    return  '<h1>Hello World my </h1>';
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
