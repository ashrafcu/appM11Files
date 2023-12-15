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
    Route::get('/tasks', [DashboardController::class, 'showTaskList'])->name('task.list');
    Route::get('/image', [ImageController::class, 'uploadImage'])->name('image.upload');
    Route::post('/image', [ImageController::class, 'uploadSingleImage'])->name('image.upload');
});


