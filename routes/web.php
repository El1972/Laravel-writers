<?php

use App\Http\Controllers\Writers\Admin\AdminController;
use App\Http\Controllers\Writers\Frontend\AboutController;
use App\Http\Controllers\Writers\Frontend\ArticlesController;
use App\Http\Controllers\Writers\Frontend\ContactController;
use App\Http\Controllers\Writers\Frontend\HomeController;
use App\Http\Controllers\Writers\Frontend\OffersController;
use App\Http\Controllers\Writers\Frontend\WritersController;
use Illuminate\Support\Facades\Route;

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
    return view('frontend.home');
});

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
});

Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'index')->name('contact');
});

Route::controller(AboutController::class)->group(function () {
    Route::get('/about', 'index')->name('about');
});

Route::controller(ArticlesController::class)->group(function () {
    Route::get('/articles', 'index')->name('articles');
});

Route::controller(OffersController::class)->group(function () {
    Route::get('/offers', 'index')->name('offers');
});

Route::controller(WritersController::class)->group(function () {
    Route::get('/writers', 'Index')->name('writers');
});

//////////////////////      A D M I N   S E C T I O N      ////////////////////////

Route::controller(AdminController::class)->group(function () {
    Route::get('/admin/dashboard', 'index')->name('admin');
});
