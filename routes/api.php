<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

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
Route::post('category-store',[CategoryController::class,'store']);
Route::get('get-category/', [CategoryController::class, 'show_all']);
Route::get('get-category/{id}', [CategoryController::class, 'show']);
Route::post('update-category', [CategoryController::class, 'update']);
Route::delete('delete-category', [CategoryController::class, 'destroy']);

Route::post('product-store', [ProductController::class, 'store']);
Route::get('get-product/', [ProductController::class, 'show_all']);
Route::get('get-product/{id}', [ProductController::class, 'show']);
Route::post('update-product', [ProductController::class, 'update']);
Route::delete('delete-product', [ProductController::class, 'destroy']);
