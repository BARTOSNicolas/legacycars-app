<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
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

Route::get('/', [HomeController::class, 'view']);

Route::get('/product', [ProductController::class, 'product_list']);

Route::get('/sale', [ProductController::class, 'product_sell']);

Route::get('/product/{id}', [ProductController::class, 'product_details']);

Route::get('/cart', [CartController::class, 'view']);

