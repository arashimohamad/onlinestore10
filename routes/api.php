<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// API tidak memerlukan interface
// cara access api pada web browser
// http://localhost/onlinestore10/public/api/products

Route::get('products', [ProductApiController::class, 'index']);
Route::post('products', [ProductApiController::class, 'store']);
Route::put('products/update/{id}', [ProductApiController::class, 'update']);
Route::get('products/{id}', [ProductApiController::class, 'show']);
Route::delete('products/delete/{id}', [ProductApiController::class, 'destroy']);        // Method : can use method get / delete