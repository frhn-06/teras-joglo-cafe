<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\FasilityController;
use App\Http\Controllers\NeewController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CekAdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardMenuController;
use App\Http\Controllers\DashboardNeewController;
use App\Http\Controllers\DashboardSettingController;
use App\Http\Controllers\OTPController;
use App\Http\Controllers\VerificationController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/coba', function () {
    return view('coba');
});
Route::get('/coba2', function () {
    return view('coba2');
});
Route::get('/coba3', function () {
    return view('coba3');
});

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);

Route::get('/menu', [MenuController::class, 'index']);

Route::get('/menu/{category:slug}', [MenuController::class, 'detail']);

Route::get('/fasilities', [FasilityController::class, 'index']);

Route::get('/news', [NeewController::class, 'index']);

Route::get('/news/{neew:slug}', [NeewController::class, 'detail']);

Route::get('/contact', [ContactController::class, 'index']);

Route::post('/cekadmin', [CekAdminController::class, 'cek']);

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'index']);
    Route::post('/register', [RegisterController::class, 'store']);

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::resource('/dashboard/menu', DashboardMenuController::class)->except('show');

    Route::get('/dashboard/menu/checkSlug', [DashboardMenuController::class, 'checkSlug']);

    Route::resource('/dashboard/news', DashboardNeewController::class)->parameters(['news' => 'neew']);

    Route::get('/dashboard/neew/checkslug', [DashboardNeewController::class, 'checkSlug']);

    Route::resource('/dashboard/settings', DashboardSettingController::class)->except(['create', 'store', 'show', 'destroy']);

    Route::post('/logout', [LoginController::class, 'logout']);
});


Route::get('/otp-verification/{user_id}', [OTPController::class, 'verification'])->name('otp-verification');

Route::post('/otp-validation/{user_id}', [OTPController::class, 'validation'])->name('otp-validation');

Route::post('/otp-verification_ulang/{user_id}', [OTPController::class, 'verification_ulang'])->name('otp-verification_ulang');

Route::get('/verification', [VerificationController::class, 'verification']);

Route::post('/verification', [VerificationController::class, 'verification_validator']);
