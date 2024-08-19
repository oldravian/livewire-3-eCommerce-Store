<?php

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



use App\Livewire\Products\Index;
use App\Livewire\Counter;
use App\Livewire\EditProduct;
 
Route::get('/', Index::class)->name('home');
Route::get('/products/{product}', EditProduct::class)->name('products.edit');

Route::get('/counter', Counter::class);
