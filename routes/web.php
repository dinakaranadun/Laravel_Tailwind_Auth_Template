<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\HomePageController;

Route::middleware('auth')->group(function(){
   Route::get('/dashboard',[HomePageController::class,'index']);
   Route::delete('/logout',[SessionController::class,'destroy']);
});

Route::middleware('guest')->group(function(){
   Route::get('/', function () {return redirect()->route('login');});
   Route::get('/signin',[SessionController::class, 'index'])->name('login');
   Route::get('/register',[AuthController::class, 'create']);
   Route::post('/register',[AuthController::class, 'store']);
   Route::post('/signin',[SessionController::class, 'store']);
});