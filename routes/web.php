<?php

use Illuminate\Support\Facades\Auth;
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

Route::name('user.')->group(function () {
    Route::view('/profile', 'pages.profile')->middleware('auth')->name('profile');

    Route::get('/login', function () {
        if (Auth::check()) {
            return redirect(route('user.profile'));
        }
        return view('pages.login');
    })->name('login');

    Route::post('/login', [\App\Http\Controllers\LoginController::class, 'login']);

    Route::get('/logout', function () {
        Auth::logout();
        return redirect('/login');
    })->name('logout');

    Route::get('/registration', function () {
        if (Auth::check()) {
            return redirect(route('user.profile'));
        }
        return view('pages.login');
    })->name('registration');

    Route::post('/registration', [\App\Http\Controllers\RegistrationController::class, 'save']);
});

