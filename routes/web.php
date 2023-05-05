<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DrinkController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\TransactionController;

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
// $user_id = 1;

Route::get('/', [PromoController::class, 'show']);

Route::get('/shop/{shop_id}/prod/{prod_id}', [DrinkController::class, 'show']);

Route::get('/transaction{user_id}', [TransactionController::class, 'show']);

Route::post('/', [TransactionController::class, 'purchase_product'])->name('purchase');