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

Route::get('/', [HomeController::class, 'view'])->name('home');

Route::get('/products', [ProductController::class, 'product_list'])->name('produits');
Route::get('/products/sortByName', [ProductController::class, 'product_list_sortByName'])->name('produitsByName');
Route::get('/products/sortByPrice', [ProductController::class, 'product_list_sortByPrice'])->name('produitsByPrice');

Route::get('/sale', [ProductController::class, 'create'])->name('formulaire');
Route::post('/sale', [ProductController::class, 'store'])->name('validation');

Route::get('/product/{id}', [ProductController::class, 'product_details'])->name('product-self');

Route::get('/cart', [CartController::class, 'view'])->name('panier');

