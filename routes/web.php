<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OtpController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PageController::class, 'index'])->name('start');
Route::get('/about-us', [PageController::class, 'aboutUs'])->name('about');
Route::get('/faqs', [PageController::class, 'faq'])->name('faq');
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact');
Route::post('/contact-us', [ContactController::class, 'store'])->name('contact');

//Services
Route::prefix('our-service')->group( function(){
    Route::get('/', [ServiceController::class, 'index'])->name('service');
    Route::get('/vehicles', [ServiceController::class, 'vehicle'])->name('service.vehicle');
});

Route::get('/packages', [PageController::class, 'packages'])->name('packages');
Route::get('/become-a-driver', [PageController::class, 'becomeDriver'])->name('become-a-drive');
Route::post('/become-a-driver/otp-request', [OtpController::class,'requestForOtp'])->name('requestForOtp');
Route::post('/become-a-driver/otp-validate', [OtpController::class,'validateOtp'])->name('validateOtp');
Route::post('/become-a-driver/otp-resend', [OtpController::class,'resendOtp'])->name('resendOtp');

//Auth::routes();
// Authentication Routes...
//Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
//Route::post('login', 'Auth\LoginController@login');
//Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('/become-a-driver/register', [RegisterController::class,'showRegistrationForm'])->name('register');
Route::post('/become-a-driver/register', [RegisterController::class,'register'])->name('register');

// Password Reset Routes...
//Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
//Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
//Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
//Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

// Confirm Password (added in v6.2)
//Route::get('password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')->name('password.confirm');
//Route::post('password/confirm', 'Auth\ConfirmPasswordController@confirm');

// Email Verification Routes...
//Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
//Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify'); // v6.x
///* Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify'); // v5.x */
//Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
