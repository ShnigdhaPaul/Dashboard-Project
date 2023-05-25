<?php

use App\Http\Controllers\dashboard\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\dashboard\ProductController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
#user register
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register');

#user logim
Route::get('/login', [LoginController::class, 'index'])->name('login');  
Route::post('/login', [LoginController::class, 'store'])->name('login');
#user logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
#dashboard 
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard'); 
#user display
Route::get('/dashboard/users/display', [UserController::class, 'display'])->name('user.display'); 
#user create
Route::get('/dashboard/users/create', [UserController::class, 'create'])->name('user.create'); 
Route::post('/dashboard/users/create', [UserController::class, 'store'])->name('user.store'); 

#product

Route::resource('/product', ProductController::class); 
