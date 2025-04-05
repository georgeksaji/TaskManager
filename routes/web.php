<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

Route::get('/add', function () {
    return view('add');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/login', function () {
    return view('login');
});


Route::get('/register', function () {
    return view('register');
});


Route:: post('/add', [MyController::class,'add']);

Route::post('/login',[MyController::class,'login']);

Route::post('/register',[MyController::class,'register']);


Route::get('/view',[MyController::class,'view']);

Route::post('/delete',[MyController::class,'delete']);

Route::post('/updatepage',[MyController::class,'updatepage']); // to go to update page

Route::post('/update',[MyController::class,'update']); // to update the task

Route::get('/logout',[MyController::class,'logout']); // to logout