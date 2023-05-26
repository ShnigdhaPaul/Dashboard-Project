<?php

use App\Http\Controllers\dashboard\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\dashboard\ProductController;
use App\Http\Controllers\RegisterController;
use GuzzleHttp\Middleware;
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

//maling for login
Route::controller(LoginController::class)->group(function(){
    Route::get('/login','index')->name('login');  
    Route::post('/login','store')->name('login');
    #user logout
    Route::get('/logout','logout')->name('logout');
});
#user login

#dashboard 
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard'); 

//making a route group
Route::prefix('dashboard/users/')->controller(UserController::class)->group(function(){
    #user display
Route::get('display','display')->name('user.display'); 
#user create
Route::get('create','create')->name('user.create'); 
Route::post('create', 'store')->name('user.store'); 

});


#product

Route::resource('/product', ProductController::class); 
