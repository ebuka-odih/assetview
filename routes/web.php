<?php

use Illuminate\Support\Facades\Route;



Route::view('/', 'pages.index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
include 'admin.php';


Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('dashboard', "UserController@dashboard")->name('dashboard');
    Route::get('profile', "UserController@profile")->name('profile');
    Route::patch('updateProfile', "UserController@updateProfile")->name('updateProfile');
    Route::post('storePassword', "UserController@storePassword")->name('storePassword');

    Route::get('crypto-hold', "CryptoAssetsController@assets")->name('assets');
    Route::get('crypto-hold/payment/3536{id}2', "CryptoAssetsController@payment")->name('payment');
    Route::post('crypto-hold/process/payment', "CryptoAssetsController@processPayment")->name('processPayment');
    Route::get('success/3536{id}2', "CryptoAssetsController@success")->name('assets.success');

    Route::get('assets/wallet', "DepositsController@wallet")->name('wallet');
    Route::get('assets/transactions', "DepositsController@history")->name('assets.history');

    Route::get('withdrawal', "WithdrawController@withdraw")->name('withdraw');
    Route::post('process/withdrawal', "WithdrawController@processWithdraw")->name('processWithdraw');
    Route::get('withdrawal/otp/{id}', "WithdrawController@otpcode")->name('otpcode');
    Route::post('process/withdrawal/otp/', "WithdrawController@process_otp")->name('process_otp');
    Route::resource('account', "WithdrawMethodController");

    Route::get('staking', 'StakingController@stake')->name('stake');
    Route::get('connect/wallet', 'StakingController@connect')->name('connect');

    Route::get('mining', "MiningController@mining")->name('mining');
    Route::get('mining/connect', "MiningController@connect")->name('connect.mining');


});

