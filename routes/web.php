<?php

use App\Http\Controllers\CollectionController;
use App\Http\Controllers\HomeController;
use App\Models\Aboutme;
use App\Models\Banner;
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

Route::get('/', [HomeController::class,'create'])->name('index');

Route::get('/gioi-thieu', function () {
    return view('pages.gioi-thieu');
});

Route::get('/san-pham', function () {
    return view('pages.san-pham');
});

Route::get('/{collectionName}', [CollectionController::class, 'setCollection']);

Route::get('/tin-tuc', function () {
    return view('pages.tin-tuc');
});

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
