<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FoodItemController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\AdminAuthController;


/*
|--------------------------------------------------------------------------
| Homepage
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');


/*
|--------------------------------------------------------------------------
| User Registration
|--------------------------------------------------------------------------
*/

Route::get('/register', [UserAuthController::class, 'showRegister'])
    ->name('register');

Route::post('/register', [UserAuthController::class, 'register'])
    ->name('register.store');


/*
|--------------------------------------------------------------------------
| User Login
|--------------------------------------------------------------------------
*/

Route::get('/login', [UserAuthController::class, 'showLogin'])
    ->name('login');

Route::post('/login', [UserAuthController::class, 'login'])
    ->name('login.store');


/*
|--------------------------------------------------------------------------
| User Logout
|--------------------------------------------------------------------------
*/

Route::post('/logout', [UserAuthController::class, 'logout'])
    ->name('logout');


/*
|--------------------------------------------------------------------------
| Admin Login
|--------------------------------------------------------------------------
*/

Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])
    ->name('admin.login');

Route::post('/admin/login', [AdminAuthController::class, 'login'])
    ->name('admin.login.store');

Route::post('/admin/logout', [AdminAuthController::class, 'logout'])
    ->name('admin.logout');


/*
|--------------------------------------------------------------------------
| Admin Dashboard
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');


/*
|--------------------------------------------------------------------------
| Categories
|--------------------------------------------------------------------------
*/

Route::resource('categories', CategoryController::class);


/*
|--------------------------------------------------------------------------
| Food Items
|--------------------------------------------------------------------------
*/

Route::resource('food-items', FoodItemController::class);


/*
|--------------------------------------------------------------------------
| Customer Menu
|--------------------------------------------------------------------------
*/

Route::get('/menu', [MenuController::class, 'index'])
    ->name('menu');