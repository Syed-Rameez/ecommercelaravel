<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Homecomponent;
use App\Http\Livewire\Contactcomponent;
use App\Http\Livewire\Shopcomponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\Cartcomponent;
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


Route::get('/', Homecomponent::class);
Route::get('/contact', Contactcomponent::class);
Route::get('/cart', Cartcomponent::class)->name('product.cart');
Route::get('/shop', Shopcomponent::class);

Route::get('/product{slug}', DetailsComponent::class)->name('product.details');





Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
