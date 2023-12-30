<?php

use App\Http\Controllers\User\Auth\RegisterController;
use Illuminate\Support\Facades\Log;
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

// LOG区切り用
Log::debug('-------------------------------------------START-------------------------------------------');

Route::name('auth.')->prefix('auth')->group(function () {
    Route::name('register.')->prefix('register')->controller(RegisterController::class)->group(function () {
        Route::post('/store', 'store')->name('store');
    });
});
