<?php

use App\Http\Controllers\CartOrderController;
use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[LandingPageController::class,'index']);
Route::get('/orders', [CartOrderController::class, 'index']);
Route::get('cart', [CartOrderController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id_product}', [CartOrderController::class, 'addToCart'])->name('add_to_cart');
Route::patch('update-cart', [CartOrderController::class, 'update'])->name('update_cart');
Route::delete('remove-from-cart', [CartOrderController::class, 'remove'])->name('remove_from_cart');

Route::post('/checkout',[CartOrderController::class,'checkout'])->name('checkout');

