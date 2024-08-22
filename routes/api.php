<?php

use App\Http\Controllers\Api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('products', ProductController::class);

/*
we can create seperate routes as below instead of using: Route::apiResource('products', ProductController::class);
Route::get('products', [ProductController::class, 'index']); // GET /products
Route::post('products', [ProductController::class, 'store']); // POST /products
Route::get('products/{product}', [ProductController::class, 'show']); // GET /products/{product}
Route::put('products/{product}', [ProductController::class, 'update']); // PUT /products/{product}
Route::patch('products/{product}', [ProductController::class, 'update']); // PATCH /products/{product}
Route::delete('products/{product}', [ProductController::class, 'destroy']); // DELETE /products/{product}
*/


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
