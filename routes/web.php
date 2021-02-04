<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BackOfficeController;
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
//HOME
Route::get('/', [HomeController::class, 'view'])->name('home');

//PRODUCT
Route::get('/products', [ProductController::class, 'product_list'])->name('produits');
Route::get('/products/sortByName', [ProductController::class, 'product_list_sortByName'])->name('produitsByName');
Route::get('/products/sortByPrice', [ProductController::class, 'product_list_sortByPrice'])->name('produitsByPrice');

//VENDRE
Route::get('/vendresavoiture', [ProductController::class, 'create'])->name('formulaire');

//PRODUCT SELF
Route::get('/product/{id}', [ProductController::class, 'product_details'])->name('product-self');

//PANIER
Route::get('/cart', [CartController::class, 'view'])->name('panier');

//BACKOFFICE
Route::get('/backoffice/', [BackOfficeController::class, 'show'])->name('backoffice');
Route::post('/vendresavoiture', [BackOfficeController::class, 'addCar'])->name('validation');
Route::get('/backoffice/update/{id}', [BackOfficeController::class, 'update'])->name('backUpdate');
Route::post('/backoffice/updated/{id}', [BackOfficeController::class, 'updated_car'])->name('backUpdated');
Route::get('/backoffice/delete/{id}', [BackOfficeController::class, 'delete'])->name('backDelete');

