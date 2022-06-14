<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "Dashboard" middleware group. Now create something great!
|
*/
// Auth Routes

    Route::get('dashboard/login', [\App\Http\Controllers\Dashboard\Auth\LoginController::class,'login'])->name('dashboard.login');
    Route::post('dashboard/login', [\App\Http\Controllers\Dashboard\Auth\LoginController::class,'loginProcess'])->name('dashboard.login');
Route::post('dashboard/logout', [\App\Http\Controllers\Dashboard\Auth\LogoutController::class,'logout'])->name('dashboard.logout');

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){

    Route::group(['prefix' => 'dashboard', 'name' => 'dashboard.', 'middleware' => 'auth:users'],function(){
        Route::get('index', [\App\Http\Controllers\Dashboard\HomeController::class, 'index'])->name('index');
    });
});


