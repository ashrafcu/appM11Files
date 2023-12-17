<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
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
    Route::get('/products', [ProductController::class, 'showAllProducts'])->name('product.list');
    Route::get('/products/add-product', [ProductController::class, 'addProducts'])->name('add-products.form');
    Route::POST('/products', [ProductController::class, 'storeProducts']);
    Route::get('/transactions', [DashboardController::class, 'showAllTransactions'])->name('transaction.list');
    Route::get('/invoices/add-invoice', [InvoiceController::class, 'addInvoices'])->name('add-invoices.form');
    Route::POST('/invoices/add-invoice', [InvoiceController::class, 'addInvoices']);
});


