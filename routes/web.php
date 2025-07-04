<?php

use App\Http\Controllers\CopyTradingController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\TradeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WithdrawalController;
use App\Http\Controllers\SubBotTraderController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.index')->name('index');
Route::view('products', 'pages.products')->name('products');
Route::view('market-caps', 'pages.market')->name('market');
Route::view('about', 'pages.about')->name('about');
Route::get('loading', [UserController::class, 'loading'])->name('loading');

Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'user', 'as' => 'user.'], function(){
    Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    Route::get('profile', [UserController::class, 'profile'])->name('profile');
    Route::post('update/profile/{id}', [UserController::class, 'updateProfile'])->name('updateProfile');
    Route::post('update/password/', [UserController::class, 'updatePassword'])->name('updatePassword');

    Route::get('trade/{id}', [TradeController::class, 'trade'])->name('trade');
    Route::post('place/buy/trade', [TradeController::class, 'placeBuyTrade'])->name('placeBuyTrade');
    Route::post('place/sell/trade', [TradeController::class, 'placeSellTrade'])->name('placeSellTrade');
    Route::get('close/trade/{id}', [TradeController::class, 'closeTrade'])->name('closeTrade');

    Route::get('deposit', [DepositController::class, 'deposit'])->name('deposit');
    Route::post('deposit/payment/', [DepositController::class, 'payment'])->name('payment');

    Route::get('withdrawal/', [WithdrawalController::class, 'withdrawal'])->name('withdrawal');
    Route::post('store/withdrawal/', [WithdrawalController::class, 'withdrawalStore'])->name('withdrawalStore');

    Route::get('subscription/plans', [SubscriptionController::class, 'index'])->name('sub.plans');
    Route::post('activate/plan', [SubscriptionController::class, 'store'])->name('activatePlan');

    Route::get('copy-trading', [CopyTradingController::class, 'index'])->name('copyTrading.index');
    Route::post('store/copy-trading', [CopyTradingController::class, 'store'])->name('copyTrading.store');

    // AI Trader routes
    Route::get('ai-trader', [SubBotTraderController::class, 'index'])->name('aiTrader.index');
    Route::post('ai-trader/store', [SubBotTraderController::class, 'store'])->name('aiTrader.store');
    Route::get('ai-trader/history', [SubBotTraderController::class, 'history'])->name('aiTrader.history');

});
 Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');
//Route::get('/dashboard', function () {
//    return view('dashboard.index');
//})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
