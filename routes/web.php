<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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
});

Route::controller(PagesController::class)->group(function () {
    Route::get('/', 'home');
    Route::get('/produkt-premium/{premium_product:slug}', 'premium_product')->name('premium.product');
    Route::get('/produkt/{product:slug}', 'product')->name('product');
    Route::get('/kalendarz', 'calendar');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
