<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\Merchant\MerchantAuthController;
use App\Http\Controllers\Merchant\ProductController;
use App\Http\Controllers\Merchant\ItemRequestController;
use App\Http\Controllers\Merchant\ProfileController;

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
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
        'name' => 'merchant'
    ],
    function () {

      
    Route::prefix('merchant')->name('merchant.')->group(function () {
        Auth::routes();
    
        Route::get('login', [MerchantAuthController::class, 'showLoginForm'])->name('login');
        Route::post('login', [MerchantAuthController::class, 'login']);
        Route::get('register', [MerchantAuthController::class, 'showRegisterForm'])->name('register');
        Route::post('register', [MerchantAuthController::class, 'register']);
        Route::post('logout', [MerchantAuthController::class, 'logout'])->name('logout');

        Route::middleware(['auth:merchant'])->group(function () {
            Route::resource('products', ProductController::class);
             Route::resource('itemRequests', ItemRequestController::class);
            Route::get('/', function () {
                return view('merchantDashboard');
                })->name('dashboard');

                Route::put('/update/profile/info', [ProfileController::class, 'updateInfo'])->name('update.profile');
                Route::put('/profile/password', [ProfileController::class, 'updatePassword'])->name('update.password');
                Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
                Route::get('/profile/{type}', [ProfileController::class, 'index'])->name('profile.show');

                Route::post('/merchant/send-otp', [ProfileController::class, 'sendOTP'])->name('profile.send.otp');
                Route::post('/merchant/verify-otp', [ProfileController::class, 'verifyOTP'])->name('profile.verify.otp');
                Route::get('/profile/verify-otp', [ProfileController::class, 'showVerifyOtpPage'])->name('verify.otp.page');

            });
        });
    }
);