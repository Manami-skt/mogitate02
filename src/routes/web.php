<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckController;

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

Route::get('/products', [CheckController::class, 'index']);

Route::get('/products/{productId}', [CheckController::class, 'index']);

Route::patch('products/{productId}/update', [CheckController::class, 'update']);

Route::get('/products/register', [CheckController::class, 'store']);

Route::get('/products/search', [CheckController::class, 'search']);

Route::get('/products/{productId}/delete', [CheckController::class, 'destroy']);