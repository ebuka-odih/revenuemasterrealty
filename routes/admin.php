<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminDepositController;
use App\Http\Controllers\Admin\AdminFundingController;
use App\Http\Controllers\Admin\AdminImageController;
use App\Http\Controllers\Admin\AdminMessageController;
use App\Http\Controllers\Admin\AdminTestimonyController;
use App\Http\Controllers\Admin\AdminWithdrawalController;
use App\Http\Controllers\Admin\PaymentMethodController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['auth', 'verified', 'admin'], 'prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('security', [AdminController::class, 'security'])->name('security');
    Route::post('changePasswordSave', [AdminController::class, 'changePasswordSave'])->name('changePasswordSave');

    Route::get('users', [UserController::class, 'users'])->name('users');
    Route::get('users/detail/{id}', [UserController::class, 'userDetail'])->name('userDetail');

    Route::resource('property', PropertyController::class);
    Route::resource('payment-method', PaymentMethodController::class);
    Route::resource('funding', AdminFundingController::class);
    Route::resource('message', AdminMessageController::class);
    Route::resource('testimony', AdminTestimonyController::class);

    Route::get('deposits', [AdminDepositController::class, 'deposits'])->name('deposits');
    Route::get('approve/deposit/{id}', [AdminDepositController::class, 'acceptDeposit'])->name('acceptDeposit');
    Route::delete('delete/{id}', [AdminDepositController::class, 'deleteDeposit'])->name('deleteDeposit');

    Route::get('withdrawal', [AdminWithdrawalController::class, 'withdrawal'])->name('withdrawal');
    Route::get('approve/withdrawal/{id}', [AdminWithdrawalController::class, 'approve_withdrawal'])->name('approve_withdrawal');
    Route::delete('delete/withdrawal/{id}', [AdminWithdrawalController::class, 'deleteWithdrawal'])->name('deleteWithdrawal');


    Route::get('image/{id}', [AdminImageController::class, 'image'])->name('image');
    Route::post('storeImage/', [AdminImageController::class, 'storeImage'])->name('storeImage');
});
