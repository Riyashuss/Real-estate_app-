<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPassword;
use App\Http\Controllers\Auth\ChangePassword;

use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;

use App\Http\COntrollers\DashboardController;
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
	return redirect('/welcome');
})->middleware('auth');

Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.perform');

Route::get('/register', [RegisterController::class, 'show'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'register'])->middleware('guest')->name('register.perform');

Route::get('/reset-password', [ResetPassword::class, 'show'])->middleware('guest')->name('reset-password');
Route::post('/reset-password', [ResetPassword::class, 'send'])->middleware('guest')->name('reset.perform');

Route::get('/change-password', [ChangePassword::class, 'show'])->middleware('guest')->name('change-password');
Route::post('/change-password', [ChangePassword::class, 'update'])->middleware('guest')->name('change.perform');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/user-profile', [ProfileController::class, 'show'])->name('user-profile');
    Route::post('/user-profile', [ProfileController::class, 'update'])->name('user-profile.perform');

    // Route::get('/welcome/{welcome}', [DashboardController::class, 'welcome'])->name('welcome');
    Route::get('/welcome', [DashboardController::class, 'welcome'])->name('welcome'); 

    Route::get('/Pipeline',[DashboardController::class,'pipeline'])->name('Pipeline');

Route::get('/deal_process_all_tabs', [DashboardController::class, 'deal_process_all_tabs'])->name('deal_process_all_tabs');

    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});
