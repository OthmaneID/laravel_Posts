<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return redirect()->route('posts');
});

Route::get('/register',[RegisterController::class,"index"])->name('register');
Route::post('/register',[RegisterController::class,'store']);

Route::get('/dashboard',function(){
    return view('pages.dashboard');
})->name('dashboard') ;


Route::get('/posts', function () {
    return view('pages.index');
})->name('posts') ;


