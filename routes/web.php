<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::get('/', function () {
    return view('home');
});

Route::get("/contact",function(){
    return view('contact');
});

Route::get("/about",function(){
    return view('about');
});