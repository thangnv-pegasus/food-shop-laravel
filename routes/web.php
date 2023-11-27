<?php

use App\Http\Controllers\BlogsController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\ProductsController;
use App\Models\Aboutme;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Product;
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

Route::get('/san-pham', [ProductsController::class, 'create']);

// Route::get('/{collectionName}', [CollectionController::class, 'setCollection']);

Route::get('/tin-tuc', [BlogsController::class, 'create']);

Route::get('/blogs', [BlogsController::class, 'create']);

Route::get('/lien-he', function () {
    return view('pages.lien-he');
});

Route::get('/gio-hang', function () {
    return view('pages.gio-hang');
});

Route::get('/dang-nhap', function () {
    return view('pages.dang-nhap');
});

Route::get('/dang-ky', function () {
    return view('pages.dang-ky');
});

Route::get('/tin-tuc2', fn() => view('pages.blogs'));

Route::get('/tin-tuc/{id}', fn($id) => view('pages.detail-blog', ['blog' => Blog::firstWhere('id', '=', $id)]));

Route::get('/product/{id}', [ProductsController::class, 'detail']);