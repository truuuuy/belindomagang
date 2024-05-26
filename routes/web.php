<?php

use App\Models\Order;
use App\Models\Keranjang;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Contracts\Role;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\CategoriesController;

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

    // PRODUCT
    Route::get('/indexProduct', [ProductsController::class, 'index'])->name('product.index');
    Route::get('/addProduct', [ProductsController::class,'create'])->name('product.create');
    Route::post('/insertProduct', [ProductsController::class,'store'])->name('product.store');
    Route::get('/editProduct/{id}', [ProductsController::class,'edit'])->name('product.edit');
    Route::post('/updateProduct/{id}', [ProductsController::class,'update'])->name('product.update');
    Route::delete('/deleteProduct/{id}', [ProductsController::class,'destroy'])->name('product.delete');

    // ORDER
    Route::get('/indexOrder', [OrderController::class, 'index'])->name('order.index');

});

Route::group(['middleware' => ['role:user|admin']], function(){
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::group(['middleware' => ['role:user']], function(){
    Route::get('/template', [TemplateController::class, 'index']);
    Route::post('/addCart/{id}', [KeranjangController::class, 'store'])->name('keranjang.add');

    // routes/web.php

Route::get('/index', [KeranjangController::class, 'index'])->name('keranjang.index');
Route::delete('/delete/{id}', [KeranjangController::class, 'destroy'])->name('keranjang.delete');

});