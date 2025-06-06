<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProductController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('products', [ProductController::class, 'index']);
Route::get('products/{id}', [ProductController::class, 'show']);
Route::post('products', [ProductController::class, 'store']);
Route::put('products/{id}', [ProductController::class, 'update']);
Route::delete('products/{id}', [ProductController::class, 'destroy']);