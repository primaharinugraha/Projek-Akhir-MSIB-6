<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EleraningController;



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

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('authenticate', [LoginController::class, 'authenticate'])->name('authenticate');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('home', [UserController::class, 'home'])->name('user.home');

Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register_user', [UserController::class, 'register_user'])->name('register_user');

Route::get('profile/user', [ProfileController::class, 'showprofile'])->name('profile');

Route::get('proyek', [UserController::class, 'proyek'])->name('proyek');
Route::get('proyek/show', [UserController::class, 'show'])->name('proyek.show');
Route::get('create/proyek', [UserController::class, 'create'])->name('create.proyek');

Route::get('kelolauang', [UserController::class, 'kelolauang'])->name('kelolauang');
Route::get('kelolauang/create', [UserController::class, 'createkelolauang'])->name('kelolauang.create');


Route::get('Article', [UserController::class, 'article'])->name('article');

Route::get('E-learning', [EleraningController::class, 'indexeleraning'])->name('e-learning');
// fundamental
Route::get('E-learning/fundamental/video1', [EleraningController::class, 'fundamental1'])->name('funda1');
Route::get('E-learning/fundamental/video2', [EleraningController::class, 'fundamental2'])->name('funda2');
Route::get('E-learning/fundamental/video3', [EleraningController::class, 'fundamental3'])->name('funda3');
Route::get('E-learning/fundamental/video4', [EleraningController::class, 'fundamental4'])->name('funda4');
Route::get('E-learning/fundamental/video5', [EleraningController::class, 'fundamental5'])->name('funda5');

// intermediate
Route::get('E-learning/intermediate/video1', [EleraningController::class, 'intermediate1'])->name('inter1');
Route::get('E-learning/intermediate/video2', [EleraningController::class, 'intermediate2'])->name('inter2');
Route::get('E-learning/intermediate/video3', [EleraningController::class, 'intermediate3'])->name('inter3');
Route::get('E-learning/intermediate/video4', [EleraningController::class, 'intermediate4'])->name('inter4');
Route::get('E-learning/intermediate/video5', [EleraningController::class, 'intermediate5'])->name('inter5');

// advance
Route::get('E-learning/advance/video1', [EleraningController::class, 'advance1'])->name('adv1');
Route::get('E-learning/advance/video2', [EleraningController::class, 'advance2'])->name('adv2');
Route::get('E-learning/advance/video3', [EleraningController::class, 'advance3'])->name('adv3');
Route::get('E-learning/advance/video4', [EleraningController::class, 'advance4'])->name('adv4');
Route::get('E-learning/advance/video5', [EleraningController::class, 'advance5'])->name('adv5');

// dashboard
Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
Route::get('dashboard/dataproyek', [DashboardController::class, 'dataproyekdashboard'])->name('dataproyek.dashboard');
Route::get('dashboard/member', [DashboardController::class, 'memberdashboard'])->name('member.dashboard');
Route::get('dashboard/user', [DashboardController::class, 'userdashboard'])->name('user.dashboard');
Route::get('dashboard/article', [DashboardController::class, 'articledashboard'])->name('article.dashboard');