<?php

use Illuminate\Support\Facades\Route;



Route::view('/', 'pages.index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
include 'admin.php';


Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('dashboard', "UserController@dashboard")->name('dashboard');

    Route::get('crypto-hold', "CryptoAssetsController@assets")->name('assets');
    Route::get('crypto-hold/payment/3536{id}2', "CryptoAssetsController@payment")->name('payment');
    Route::post('crypto-hold/process/payment', "CryptoAssetsController@processPayment")->name('processPayment');
    Route::get('success/3536{id}2', "CryptoAssetsController@success")->name('assets.success');
    Route::get('assets/transactions', "CryptoAssetsController@history")->name('assets.history');
});

