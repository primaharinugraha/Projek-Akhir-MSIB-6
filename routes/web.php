<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



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

Route::get('login', [UserController::class, 'indexlogin'])->name('user.indexlogin');
Route::get('home', [UserController::class, 'home'])->name('user.home');
Route::get('register', [UserController::class, 'indexregister'])->name('user.indexregister');
Route::get('profile', [UserController::class, 'profile'])->name('user.profile');