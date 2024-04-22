<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\RegisterUserController;
use App\Http\Controllers\Auth\ResetPasswordController;
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

Route::middleware('guest')->group(function (){

    Route::get('/register',[RegisterUserController::class,'create'])
        ->name('register.create');

    Route::post('/register',[RegisterUserController::class,'store'])
        ->name('register.store');

    Route::get('/login',[AuthenticatedSessionController::class,'create'])
        ->name('login');

    Route::post('/login',[AuthenticatedSessionController::class,'store'])
        ->name('login.store');
});

Route::post('/logout',[AuthenticatedSessionController::class,'destroy'])
    ->name('logout')
    ->middleware('auth');


Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/reset-password', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');
