<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return redirect()->route('posts');
});
// register
Route::get('/register',[RegisterController::class,"index"])->name('register');
Route::post('/register',[RegisterController::class,'store']);

// Login
Route::get('/login',[LoginController::class,"index"])->name("login");
Route::post('/login',[LoginController::class,"store"]);


// Dashboard
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard') ;


Route::get('/posts', function () {
    return view('pages.index');
})->name('posts') ;


