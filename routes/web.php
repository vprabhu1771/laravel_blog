<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/posts/{id}', [HomeController::class, 'show'])->name('posts.show');


use App\Http\Controllers\AuthController;

Route::get('/register',[AuthController::class,'register'])->name('auth.register');
Route::post('/store',[AuthController::class,'store'])->name('auth.store');
Route::get('/success',[AuthController::class,'success'])->name('auth.success');

Route::get('/login',[AuthController::class, 'login'])->name('auth.login');
Route::post('/authenticate',[AuthController::class,'authenticate'])->name('auth.authenticate');

Route::get('/profile',[AuthController::class,'profile'])->middleware('auth')->name('auth.profile');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

