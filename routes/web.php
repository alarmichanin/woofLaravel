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

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/', 'HomepageController@index');
    Route::get('/aboutPage', 'AboutpageController@index');
    Route::get('/contactPage', 'ContactpageController@index');
    //TODO id and page parameters
    Route::get('/goodsPage/{page?}', 'GoodspageController@index');
    Route::get('/productPage/{id?}', 'ProductpageController@index');
});

