<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\PostController;


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
})->name('home');

Route::get('dashboard/user', [MainController::class, 'dashboardUser'])->middleware('auth')->name('main.dashboardUser');
Route::get('dashboard/admin', [MainController::class, 'dashboardAdmin'])->middleware('auth')->name('main.dashboardAdmin');

Route::get('home', [UserController::class, 'home'])->name('user.home');

Route::get('profile/{user}/edit', [UserController::class, 'edit'])->middleware('auth')->can('update', 'user')->name('profiles.edit');
Route::put('profile/{user}', [UserController::class, 'update'])->middleware('auth')->can('update', 'user')->name('profiles.update');

Route::get('register', [UserController::class, 'register'])->middleware('guest')->name('register');
Route::post('register_user', [UserController::class, 'register_user'])->middleware('guest')->name('register_user');

Route::get('login', [LoginController::class, 'login'])->middleware('guest')->name('login');
Route::post('authenticate', [LoginController::class, 'authenticate'])->middleware('guest')->name('authenticate');
Route::post('logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');

Route::post('finances', [FinanceController::class, 'store'])->middleware('auth')->name('finances.store');
Route::get('finances', [FinanceController::class, 'index'])->middleware('auth')->name('finances.index');
Route::delete('finances/{finance}', [FinanceController::class, 'destroy'])->middleware('auth')->name('finances.destroy');
Route::get('finances/year/{year}', [FinanceController::class, 'year'])->middleware('auth')->name('finances.year');
Route::get('finances/year/{year}/month/{month}', [FinanceController::class, 'yearMonth'])->middleware('auth')->name('finances.yearMonth');
Route::get('finances/year/{year}/month/{month}/create', [FinanceController::class, 'create'])->middleware('auth')->name('finances.create');
Route::get('finances/export', [FinanceController::class, 'export'])->name('finances.export');

Route::get('plans', [PlanController::class, 'index'])->middleware('auth')->name('plans.index');
Route::get('plans/create', [PlanController::class, 'create'])->middleware('auth')->name('plans.create');
Route::post('plans', [PlanController::class, 'store'])->middleware('auth')->name('plans.store');
Route::get('plans/{plan}', [PlanController::class, 'show'])->middleware('auth')->name('plans.show');
Route::delete('plans/{plan}', [PlanController::class, 'destroy'])->middleware('auth')->name('plans.destroy');

Route::get('posts', [PostController::class, 'index'])->middleware('auth')->name('posts.index');
Route::get('posts/create', [PostController::class, 'create'])->middleware('auth')->can('create', App\Models\Post::class)->name('posts.create');
Route::post('posts', [PostController::class, 'store'])->middleware('auth')->can('create', App\Models\Post::class)->name('posts.store');
Route::get('posts/{post}', [PostController::class, 'show'])->middleware('auth')->can('view', 'post')->name('posts.show');
Route::get('posts/{post}/edit', [PostController::class, 'edit'])->middleware('auth')->can('update', 'post')->name('posts.edit');
Route::put('posts/{post}', [PostController::class, 'update'])->middleware('auth')->can('update', 'post')->name('posts.update');
Route::delete('posts/{post}', [PostController::class, 'destroy'])->middleware('auth')->can('delete', 'post')->name('posts.destroy');