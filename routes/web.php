<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::get('product', function () {
//     return view('product');
// })->name('product');

Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::get('/product/store', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/destroy/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
// Route::get('/product', 'ProductController@index')->name('product.index');

// Route::resource('product', ProductController::class)->name('product', 'product');

//Get, Post, Put/Patch, Delete

require __DIR__ . '/settings.php';
