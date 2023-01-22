<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\admin\AdminProductController;
use App\Http\Controllers\admin\AdminCategoryController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::prefix('/',function(){
    
// });
Route::get('/',[CategoryController::class, 'show_all']);
// Route::get('/', [ProductController::class, 'show_all']);
Route::get('/product-details/{id}',[ProductController::class,'show'])->name('product.details');

// Route::get('admin',[AdminCategoryController::class,'index']);
Route::prefix('admin')->group(function(){
    Route::get('/add-product', [AdminProductController::class, 'index'])->name('add.product');
    Route::get('/add-category', [AdminCategoryController::class, 'index'])->name('add.category');
    Route::get('/edit-category', [AdminCategoryController::class, 'edit'])->name('edit.category');
    Route::get('/edit-subcategory', [AdminCategoryController::class, 'edit_subCategory'])->name('edit.sub-category');
    Route::put('/update-category', [AdminCategoryController::class, 'update'])->name('update.category');
    // Route::put('/update-subcategory', [AdminCategoryController::class, 'update'])->name('update.subcategory');
    Route::get('/delete-category', [AdminCategoryController::class, 'destroy'])->name('delete.category');
    Route::post('/add-category', [AdminCategoryController::class, 'store'])->name('store.category');
    Route::get('/add-sub-category', [AdminCategoryController::class, 'view_subcategory'])->name('add.subCategory');
});
