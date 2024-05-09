<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
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

Route::get('/',[LoginController::class,'index']);
Route::post('/login',[LoginController::class,'login']);
Route::get('/register',[LoginController::class,'indexRegister']);
Route::get('/dashboard',[DashboardController::class,'index']);
Route::get('/userDashboard',[DashboardController::class,'indexUser']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');