<?php

use App\Http\Controllers\DepositController;
use App\Http\Controllers\InvestController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\TransactionsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WithdrawController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [InvestController::class, 'home'])->name('index');
Route::get('/properties', [InvestController::class, 'properties'])->name('properties');
Route::view('/about', 'pages.about')->name('about');
Route::view('/contact', 'pages.contact')->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
include 'admin.php';

Route::group(['middleware' => ['auth'], 'prefix' => 'user', 'as' => 'user.'], function(){
    Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    Route::get('profile', [UserController::class, 'profile'])->name('profile');
    Route::patch('updateProfile', [UserController::class, 'updateProfile'])->name('updateProfile');

    Route::get('deposit/bank-transfer', [DepositController::class, 'deposit'])->name('deposit');
    Route::get('deposit/crypto', [DepositController::class, 'crypto'])->name('crypto');
    Route::get('deposit/payment/{id}', [DepositController::class, 'payment'])->name('payment');
    Route::post('requestBankinfo', [DepositController::class, 'requestBankinfo'])->name('requestBankinfo');
    Route::post('cryptoDeposit', [DepositController::class, 'cryptoDeposit'])->name('cryptoDeposit');
    Route::patch('deposit/processPayment/{id}', [DepositController::class, 'processPayment'])->name('processPayment');

    Route::get('projects', [PropertyController::class, 'projects'])->name('projects');
    Route::get('projectDetail/{id}', [PropertyController::class, 'projectDetail'])->name('projectDetail');
    Route::get('withdraw', [WithdrawController::class, 'withdraw'])->name('withdraw');
    Route::post('processWithdraw', [WithdrawController::class, 'processWithdraw'])->name('processWithdraw');

    Route::get('history/deposit', [TransactionsController::class, 'depositHistory'])->name('depositHistory');
    Route::get('history/withdraw', [TransactionsController::class, 'withdrawalHistory'])->name('withdrawalHistory');
    Route::get('history/funding', [TransactionsController::class, 'fundingHistory'])->name('fundingHistory');

    Route::post('property/invest', [InvestController::class, 'invest'])->name('invest');


});

