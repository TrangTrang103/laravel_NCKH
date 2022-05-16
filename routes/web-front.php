<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginResController;
use App\Http\Controllers\Web\CategoryProductController;
use App\Http\Controllers\Web\IndexController;

// Route::get('/', function () {
//     return view('frontend.index');
// })->name('home');

Route::get('/', [IndexController::class, 'index'] )->name('home');
Route::get('/login', [LoginResController::class,'login'] )->name('login');

Route::get('/register', [LoginResController::class,'register'] )->name('register');

Route::post('/addlogin', [LoginResController::class,'addlogin'] )->name('addlogin');
Route::post('/addregister', [LoginResController::class,'addregister'] )->name('addregister');

Route::get('categories/{category}/products', [CategoryProductController::class, 'index'])->name('category-product');

Route::get('/logout', [LoginResController::class,'logout'] )->name('logout');