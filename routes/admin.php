<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::get('dashboard', "Admin\AdminController@dashboard")->name('dashboard');

    Route::get('users', "Admin\UserController@users")->name('users');
    Route::get('deposits', "Admin\AdminDeposits@deposits")->name('deposits');

    Route::resource('assets', "Admin\AdminCryptoAssetsController");


});
