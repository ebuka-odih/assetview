<?php

use Illuminate\Support\Facades\Route;



Route::view('/', 'pages.index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
include 'admin.php';


Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('dashboard', "UserController@dashboard")->name('dashboard');

    Route::get('crypto-hold', "CryptoAssetsController@assets")->name('assets');
});

