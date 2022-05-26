<?php

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
    return view('pages.frontpage');
});
Route::get('/aboutPage', function () {
    return view('pages.aboutpage');
});
Route::get('/contactPage', function () {
    return view('pages.contactpage');
});
Route::get('/goodsPage', function () {
    return view('pages.goodspage');
});
Route::get('/productPage', function () {
    return view('pages.productpage');
});
