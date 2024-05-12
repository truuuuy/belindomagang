<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Contracts\Role;

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


Route::get('/',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'login']);
Route::get('/register',[LoginController::class,'indexRegister']);



Route::group(['middleware' => ['role:admin']], function(){
    Route::get('/dashboard',[DashboardController::class,'index']);
    Route::get('/dashboardAdmin',[DashboardController::class,'keloladDashboard']);
    
    // CATEGORIES
    Route::get('/indexKategori', [CategoriesController::class,'index'])->name('category.index');
    Route::get('/addCatgory', [CategoriesController::class,'create'])->name('category.create');
    Route::post('/insertCategory', [CategoriesController::class,'store'])->name('category.insert');
    Route::get('/editCategory/{id}', [CategoriesController::class,'edit'])->name('category.edit');
    Route::post('/updateCategory/{id}', [CategoriesController::class,'update'])->name('category.update');
    Route::delete('/deleteCategory/{id}', [CategoriesController::class,'destroy'])->name('category.delete');
});

Route::group(['middleware' => ['role:user|admin']], function(){
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
