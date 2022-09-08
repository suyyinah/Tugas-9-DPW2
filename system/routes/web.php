<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;

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
// frontview
Route::get('/', [ClientController::class, 'showHome' ]);
Route::get('shop', [ClientController::class, 'showshop' ]);
Route::post('shop/filter', [ClientController::class, 'filter' ]);
Route::get('home', [ClientController::class, 'showHome' ]);
Route::get('about', [ClientController::class, 'showAbout' ]);
Route::get('about/{produk}', [ClientController::class, 'showAbout' ]);
Route::get('blog', [ClientController::class, 'showBlog' ]);
Route::get('contact', [ClientController::class, 'showBlog']);
Route::get('cart', [ClientController::class, 'showCart']);

Route::get('/beranda', [HomeController::class, 'showBeranda']);
Route::get('/kategori', [HomeController::class, 'showKategori']);

Route::get('/promo', [HomeController::class, 'showPromo']);
Route::get('/pelanggan', [HomeController::class, 'showPelanggan']);
Route::get('/supplier', [HomeController::class, 'showSupplier']);

Route::prefix('admin')->middleware('auth')->group(function(){
    Route::post('produk/filter', [ProdukController::class, 'filter']);
    Route::resource('produk', ProdukController::class);
    Route::resource('user', UserController::class);
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);
