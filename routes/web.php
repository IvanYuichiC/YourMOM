<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

// Route for category listing
Route::get('/', [CategoryController::class, 'index'])->name('categories.index');

// Route for product listing
Route::get('products', [ProductController::class, 'index']);

// Route for showing a specific product by ID
Route::get('products/{category}', [ProductController::class, 'index']);
