<?php

use Illuminate\Support\Facades\Route;

Route::get('/all_products', \App\Http\Livewire\Products\Index::class);
Route::get('/cart', \App\Http\Livewire\Carts\MyCart::class);
Route::get('/product/add', \App\Http\Livewire\Admin\Products\Create::class)->name('product.add');
Route::get('/product/search', \App\Http\Livewire\Products\Search::class)->name('product.search');
Route::get('/product/show/{id}', \App\Http\Livewire\Products\Show::class)->name('product.show');

Route::get("/", function (){
   return view('welcome');
});
Route::get("/login", \App\Http\Livewire\Auth\Login::class);
Route::get("/register", \App\Http\Livewire\Auth\Register::class);

Route::get('/link', function (){
    Artisan::call('storage:link');
});


