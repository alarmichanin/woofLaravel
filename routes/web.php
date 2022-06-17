<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/', 'HomepageController@index');
    Route::get('/aboutPage', 'AboutpageController@index');
    Route::get('/contactPage', 'ContactpageController@index');
    Route::get('/goodsPage/{category_id?}', 'GoodspageController@index')->name('goods');
    Route::get('/productPage/{slug?}', 'ProductpageController@index');
    Route::get('/productPage/{slug?}/{count?}', 'ProductpageController@buy');
    Route::get("/searchProduct",'SearchController@index');
    Route::get("/sendMail",'MailController@send');
    Route::get("/cartPage",'CartController@index');
});

Route::name('user.')->group(function () {
    Route::view('/profile', 'pages.frontpage')->middleware('auth')->name('profile');

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

