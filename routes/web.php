<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/dashboard/')->name('dashboard.')->group(function() {
    Route::get('', [\App\Http\Controllers\DashboardController::class, 'index'])->name('index');
});

Route::prefix('/products/')->name('products.')->group(function(){
   Route::get('',[\App\Http\Controllers\ProductsController::class, 'index'])->name('index');
   Route::get('create',[\App\Http\Controllers\ProductsController::class, 'create'])->name('create');
   Route::get('{product}/edit',[\App\Http\Controllers\ProductsController::class, 'edit'])->name('edit');
});
