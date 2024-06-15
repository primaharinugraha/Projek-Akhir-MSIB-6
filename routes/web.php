<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EleraningController;
use App\Http\Controllers\SubscriptionController;


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

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('authenticate', [LoginController::class, 'authenticate'])->name('authenticate');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');


Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register_user', [UserController::class, 'registerUser'])->name('register_user');


Route::get('profile/{user}/edit', [UserController::class, 'edit'])->middleware('auth')->can('update', 'user')->name('profiles.edit');
Route::put('profile/{user}', [UserController::class, 'update'])->middleware('auth')->can('update', 'user')->name('profiles.update');

// Route::get('proyek', [UserController::class, 'proyek'])->name('proyek');
// Route::get('proyek/show', [UserController::class, 'show'])->name('proyek.show');
// Route::get('create/proyek', [UserController::class, 'create'])->middleware('auth')->name('create.proyek');


Route::get('plans', [PlanController::class, 'index'])->middleware('auth')->name('plans.index');
Route::get('plans/create', [PlanController::class, 'create'])->middleware('auth')->name('plans.create');
Route::post('plans', [PlanController::class, 'store'])->middleware('auth')->name('plans.store');
Route::get('plans/{plan}', [PlanController::class, 'show'])->middleware('auth')->name('plans.show');
Route::delete('plans/{plan}', [PlanController::class, 'destroy'])->middleware('auth')->name('plans.destroy');

Route::get('subscription', [SubscriptionController::class, 'home'])->middleware('auth')->name('subscription.home');
Route::post('subscription/subscribe', [SubscriptionController::class, 'subscribe'])->middleware('auth')->name('subscription.subscribe');
Route::post('subscription/cancel', [SubscriptionController::class, 'cancel'])->middleware('auth')->name('subscription.cancel');



Route::post('finances', [FinanceController::class, 'store'])->middleware('auth')->name('finances.store');
Route::get('finances', [FinanceController::class, 'index'])->middleware('auth')->name('finances.index');
Route::delete('finances/{finance}', [FinanceController::class, 'destroy'])->middleware('auth')->name('finances.destroy');
Route::get('finances/year/{year}', [FinanceController::class, 'year'])->middleware('auth')->name('finances.year');
Route::get('finances/year/{year}/month/{month}', [FinanceController::class, 'yearMonth'])->middleware('auth')->name('finances.yearMonth');
Route::get('finances/year/{year}/month/{month}/create', [FinanceController::class, 'create'])->middleware('auth')->name('finances.create');
Route::get('finances/export', [FinanceController::class, 'export'])->name('finances.export');


Route::get('Article', [UserController::class, 'article'])->name('article');

Route::get('E-learning', [EleraningController::class, 'indexeleraning'])->middleware('auth')->name('e-learning');
// fundamental
Route::get('E-learning/fundamental/video1', [EleraningController::class, 'fundamental1'])->middleware('auth')->name('funda1');
Route::get('E-learning/fundamental/video2', [EleraningController::class, 'fundamental2'])->middleware('auth')->name('funda2');
Route::get('E-learning/fundamental/video3', [EleraningController::class, 'fundamental3'])->middleware('auth')->name('funda3');
Route::get('E-learning/fundamental/video4', [EleraningController::class, 'fundamental4'])->middleware('auth')->name('funda4');
Route::get('E-learning/fundamental/video5', [EleraningController::class, 'fundamental5'])->middleware('auth')->name('funda5');

// intermediate
Route::get('E-learning/intermediate/video1', [EleraningController::class, 'intermediate1'])->middleware('auth')->name('inter1');
Route::get('E-learning/intermediate/video2', [EleraningController::class, 'intermediate2'])->middleware('auth')->name('inter2');
Route::get('E-learning/intermediate/video3', [EleraningController::class, 'intermediate3'])->middleware('auth')->name('inter3');
Route::get('E-learning/intermediate/video4', [EleraningController::class, 'intermediate4'])->middleware('auth')->name('inter4');
Route::get('E-learning/intermediate/video5', [EleraningController::class, 'intermediate5'])->middleware('auth')->name('inter5');

// advance
Route::get('E-learning/advance/video1', [EleraningController::class, 'advance1'])->middleware('auth')->name('adv1');
Route::get('E-learning/advance/video2', [EleraningController::class, 'advance2'])->middleware('auth')->name('adv2');
Route::get('E-learning/advance/video3', [EleraningController::class, 'advance3'])->middleware('auth')->name('adv3');
Route::get('E-learning/advance/video4', [EleraningController::class, 'advance4'])->middleware('auth')->name('adv4');
Route::get('E-learning/advance/video5', [EleraningController::class, 'advance5'])->middleware('auth')->name('adv5');

// dashboard
Route::get('dashboard', [DashboardController::class, 'dashboard'])->middleware('auth')->name('admin.dashboard');
Route::get('dashboard/dataproyek', [DashboardController::class, 'dataproyekdashboard'])->name('dataproyek.dashboard');
Route::get('dashboard/member', [DashboardController::class, 'memberdashboard'])->name('member.dashboard');
Route::get('dashboard/user', [DashboardController::class, 'userdashboard'])->name('user.dashboard');
Route::get('dashboard/article', [DashboardController::class, 'articledashboard'])->name('article.dashboard');
