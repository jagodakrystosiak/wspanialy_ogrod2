<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CatalogController;

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
})->name('welcome');

Route::get('/articles/{slug}',[ArticleController::class, 'show'])->name('articles');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/articles/{slug}/create',[CommentsController::class,'create'])->name('create');
Route::post('/articles/{slug}/create',[CommentsController::class,'store'])->name('store');

Route::get('/articles/{slug}/delete/{id}',[CommentsController::class,'destroy'])->name('delete');
Route::get('/articles/{slug}/edit/{id}', [CommentsController::class,'edit'])->name('edit');
Route::post('/articles/{slug}/update/{id}', [CommentsController::class,'update'])->name('update');

Route::get('/shop', [ShopController::class,'show'])->name('shop');
Route::get('/shop/realization', [ShopController::class,'realization'])->name('realization');
Route::post('/realization',[ShopController::class,'store'])->name('buy');
Route::get('/orders',[ShopController::class,'orders'])->name('orders');

Route::get('/catalog/{slug}',[CatalogController::class,'show'])->name('catalog');