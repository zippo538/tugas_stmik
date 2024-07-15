<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\KaryawanController;

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
//route login
Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'process']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

// route dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/', [DashboardController::class, 'index'])->middleware('auth');

//route barang
Route::resource('/barang', BarangController::class)->middleware('auth');
Route::resource('/karyawan', KaryawanController::class)->middleware('auth');


Route::get('/login/admin', [LoginController::class, 'showAdminLoginForm'])->name('loginAdmin');
Route::get('/login/user', [LoginController::class,'showUserLoginForm']);
Route::get('/register/admin', [RegisterController::class,'showAdminRegisterForm']);
Route::get('/register/user', [RegisterController::class,'showUserRegisterForm']);

Route::post('/login/admin', [LoginController::class,'adminLogin']);
Route::post('/login/user', [LoginController::class,'userLogin']);
Route::post('/register/admin', [RegisterController::class,'createAdmin']);
Route::post('/register/user', [RegisterController::class,'createUser']);

Route::view('/admin', 'admin');
Route::view('/user', 'user')->middleware('auth');

// //admin 
// Route::prefix('admin')->group(function(){
//  Route::get('admin',[AdminController::class, 'showLoginForm'])->name('admin.login');
//  Route::post('/login',[AdminController::class, 'login']);
//  Route::middleware('admin')->group(function(){
//     Route::get('/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
//  });
// });
