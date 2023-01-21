<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\api\ProductApiController;
use App\Http\Controllers\api\TypeApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::post('category-store',[CategoryController::class,'store']);
// Route::get('get-category/', [CategoryController::class, 'show_all']);
// Route::get('get-category/{id}', [CategoryController::class, 'show']);
// Route::post('update-category', [CategoryController::class, 'update']);
// Route::delete('delete-category', [CategoryController::class, 'destroy']);

// Route::post('product-store', [ProductApiController::class, 'store']);
// Route::get('get-product/', [ProductApiController::class, 'index']);
// Route::get('get-product/{id}', [ProductApiController::class, 'show']);
// Route::post('update-product', [ProductApiController::class, 'update']);
// Route::delete('delete-product', [ProductApiController::class, 'destroy']);

// Route::get('type-get', [TypeApiController::class, 'index']);
// Route::post('type-store', [TypeApiController::class, 'store']);
// Route::post('type-update', [TypeApiController::class, 'update']);
// Route::delete('type-delete/{id}', [TypeApiController::class, 'destroy']);