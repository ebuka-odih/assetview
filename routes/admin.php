<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::get('dashboard', "Admin\AdminController@dashboard")->name('dashboard');

    Route::get('users', "Admin\UserController@users")->name('users');
    Route::get('deposits', "Admin\AdminDeposits@deposits")->name('deposits');

    Route::get('staking', "Admin\AdminStakingController@stakes")->name('staking');
    Route::post('staking', "Admin\AdminStakingController@storeStake")->name('storeStake');
    Route::delete('delete/staking/{id}', "Admin\AdminStakingController@delete")->name('delete');

    Route::resource('asset', "Admin\AdminCryptoAssetsController");

    // Funding Route
    Route::get('fund/user', "Admin\AdminFundingController@fund")->name('fund');
    Route::post('fund/user', "Admin\AdminFundingController@sendFund")->name('sendFund');
    Route::get('defund/user', "Admin\AdminFundingController@defund")->name('defund');
    Route::post('defund/user', "Admin\AdminFundingController@sendDefund")->name('sendDefund');



});
