<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;


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

Route::get('/', function () {
    return view('landingpage');
});

Route::get('Signin', [UserController::class, 'index'])->name('user.signin');
Route::get('home', [UserController::class, 'home'])->name('user.home');

Route::get('/profile/{user}', [ProfileController::class, 'showProfile'])->name('profile');

Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register_user', [UserController::class, 'register_user'])->name('register_user');

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('authenticate', [LoginController::class, 'authenticate'])->name('authenticate');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');