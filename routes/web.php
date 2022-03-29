<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
//use Illuminate \ Auth \ SessionGuard;
use App\Http\Controllers\ShowSanphamController;
use App\Http\Controllers\ShowUserController;
use App\Http\Controllers\ShowHoadonController;
use App\Http\Controllers\ShowYeuthichController;
use App\Http\Controllers\ShowGiohangController;
use App\Http\Controllers\LoginResController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Home');
})->name('home');
Route::get('/login', [LoginResController::class,'login'] )->name('login');

Route::get('/register', [LoginResController::class,'register'] )->name('register');


Route::post('/addlogin', [LoginResController::class,'addlogin'] )->name('addlogin');
Route::post('/addregister', [LoginResController::class,'addregister'] )->name('addregister');

Route::get('/logout', [LoginResController::class,'logout'] )->name('logout');

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('html.admin.home');
        })->name('admin.home');
    Route::get('/ShowSanpham', [ShowSanphamController::class,'Sanpham'])->name('admin.showsanpham');
    Route::get('/ShowSanpham/{id}/delete', [ShowSanphamController::class,'destroy']);
    Route::get('/addsanpham', [ShowSanphamController::class,'addsanpham'])->name('admin.addsanpham');
    Route::post('/insersanpham', [ShowSanphamController::class,'insertsanpham'])->name('admin.insertsanpham');
    Route::get('/ShowSanpham/{id}/creatsanpham', [ShowSanphamController::class,'creatsanpham'])->name('admin.creatsanpham');
Route::post('/updatesanpham', [ShowSanphamController::class,'updatesanpham'])->name('admin.updatesanpham');
Route::get('/ShowUsers', [ShowUserController::class,'showusers'])->name('admin.showusers');
Route::get('/ShowHoadon', [ShowHoadonController::class,'showhoadon'])->name('admin.showhoadon');
Route::get('/ShowYeuthich', [ShowYeuthichController::class,'showyeuthich'])->name('admin.showyeuthich');
Route::get('/ShowGiohang', [ShowGiohangController::class,'showgiohang'])->name('admin.showgiohang');

});