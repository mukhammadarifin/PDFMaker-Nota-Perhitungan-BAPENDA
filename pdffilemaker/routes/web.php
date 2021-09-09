<?php

use Illuminate\Support\Facades\Route;
/* use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController; */
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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


/* Route::get('/', [AuthController::class, 'showFormLogin'])->name('login');
Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);
 
Route::group(['middleware' => 'auth'], function () {
 
    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
 
}); */

Route::get('/', function () {
    return view('/auth/login');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
 
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 
    Route::middleware(['admin'])->group(function () {
        Route::get('admin', [AdminController::class, 'index']);
    });
 
    Route::middleware(['user'])->group(function () {
        Route::get('user', [UserController::class, 'index']);
        Route::get('/user/cetak/', [UserController::class, 'cetakPDF']);
    });
 
    Route::get('/logout', function() {
        Auth::logout();
        redirect('/login');
    });
 
});

Route::resource('admin', AdminController::class);

Route::resource('user', UserController::class);

