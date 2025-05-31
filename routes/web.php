<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\NewPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;

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
   Route::get('/forgot-password',[AuthController::class,'show']);
   Route::post('/forgot-password', ForgotPasswordController::class);
   
   Route::get('/reset-password/{token}', function (string $token) {
        return view('auth.reset-password', ['token' => $token]);
   })->name('password.reset');

   Route::get('/reset-password', function () {abort(404);});
   Route::post('/reset-password',[NewPasswordController::class, 'store']);
});

