<?php

use App\Http\Controllers\BlogsController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Livewire\Products;
use App\Models\Blog;
use App\Models\User;
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

Route::get('/', [HomeController::class, 'create'])->name('index');

Route::get('/gioi-thieu', function () {
    return view('pages.gioi-thieu');
});

Route::get('/products/{collection}', Products::class);

Route::prefix('/tin-tuc')->group(function (){
    Route::get('/', [BlogsController::class, 'create']);
    Route::get('/{id}', fn($id) => view('pages.detail-blog', ['blog' => Blog::firstWhere('id', '=', $id)]));
});

Route::get('/lien-he', function () {
    return view('pages.lien-he');
});

Route::get('/gio-hang', function () {
    return view('pages.gio-hang', [
        // 'products' => Auth::user()->products()->get()
    ]);
})->middleware('is-loggin');

Route::prefix('/login')->group(function (){
    Route::get('/', [SessionController::class,'create'])->middleware('guest');
    Route::post('/', [SessionController::class,'store'])->middleware('guest');
});

Route::prefix('/register')->group(function (){
    Route::get('/', [RegisterController::class, 'create'])->middleware('guest');
    Route::post('/', [RegisterController::class, 'store'])->middleware('guest');
});

Route::prefix('/product')->group(function (){
    Route::get('/{id}', [ProductsController::class, 'detail']);
    Route::post('/', [ProductsController::class, 'addStore']);
});


Route::post('/logout',[SessionController::class,'destroy'])->middleware('auth');


