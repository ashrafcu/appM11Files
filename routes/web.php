<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\DashboardController;

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

//==Dashboard Routes==//
Route::group(['prefix'=>'admin'], function(){
    Route::get('/home', [DashboardController::class, 'showHome'])->name('home');
    Route::get('/products', [DashboardController::class, 'displayProducts'])->name('product.list');
    Route::get('/transactions', [DashboardController::class, 'showTransactions'])->name('transaction.list');
});


