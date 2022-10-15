<?php

use App\Http\Middleware\VerifyLogin;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\VerifyLogout;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PaymentController;
use App\Http\Middleware\VerifyPayment;

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

// Route::get('/', function () {
//     return view('welcome'); 
// });

//harus login biar bisa akses
Route::middleware([VerifyLogin::class])->group(function () {
    Route::get('/user-detail/{id}', [MainController::class, 'user_detail']);
    Route::get('/topup', [MainController::class, 'topup'])->name('topup');
    //process topup
    Route::post('/topup', [MainController::class, 'process_topup']);
    //avatar
    Route::get('/cool-avatar', [MainController::class, 'cool_avatar']);
    Route::post('/avatar/{id}', [MainController::class, 'buy_avatar']);
    //process buy avatar
    Route::post('/process-buy-me', [MainController::class, 'process_buy_avatar_me']);
    Route::post('/process-buy-others', [MainController::class, 'process_buy_avatar_others']);
    //appear and dissapear
    Route::get('/dissapear', [MainController::class, 'dissapear']);
    Route::get('/appear', [MainController::class, 'appear']);
    //creators angel
    Route::get('/creators-angel', [MainController::class, 'creators_angel']);
    //Thumb button
    Route::post('/thumbed/{id}', [MainController::class, 'thumbed']);
    //Thumbed Page
    Route::get('/thumbed-user', [MainController::class, 'thumbed_page']);
});

// Route::middleware([VerifyPayment::class])->group(function(){
//     Route::get('/user-detail/{id}', [MainController::class, 'user_detail']);
// });

//harus ga login
Route::middleware([VerifyLogout::class])->group(function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::get('/register-process', [AuthController::class, 'registerprocess']);
    Route::get('/login', [AuthController::class, 'login']);
    Route::post('/login', [AuthController::class, 'loginprocess']);
});

//login atau tidak login bisa
Route::get('/', [AuthController::class, 'dashboard'])->name('/');
Route::post('/logout', [AuthController::class, 'logout']);
Route::get('/search', [MainController::class, 'search_user']);
Route::get('/search-gender', [MainController::class, 'search_gender']);
Route::get('/search-hobby', [MainController::class, 'search_hobby']);
//payment route
Route::get('/payment', [PaymentController::class, 'payment'])->name('payment');
Route::post('/payment-process',[PaymentController::class, 'payment_process']);
// Route::get('/test'. [AuthController::class, 'test']);
// Route::get('/payment', [AuthController::class, 'payment'])->name('payment');

//Route localization
Route::get('/localization/{locale}', [LocaleController::class, 'changeLocaleEN']);
Route::get('/localization/{locale}', [LocaleController::class, 'changeLocaleID']);

