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

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

//Route::view('posts/create', 'posts.create');
Route::get('/posts/create', \App\Livewire\CreatePost::class);
//Route::get('posts/create', \App\Livewire\CreatePost::class);

Route::get('posts/{posts}/edit', \App\Livewire\EditPost::class);
Route::get('posts/show', \App\Livewire\ShowPost::class);

Route::get('products', [\App\Http\Controllers\ProductController::class, 'index']);

Route::get('products/create', \App\Livewire\ProductsCreate::class)->name('products.create');
Route::get('products/{product}/edit', \App\Livewire\ProductsEdit::class)->name('products.edit');

require __DIR__.'/auth.php';
