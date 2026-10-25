
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/registrasi', [AuthController::class, 'showRegister']);
Route::post('/registrasi', [AuthController::class, 'register']);

Route::get('/admin', function () {
    return view('admin');
})->middleware('auth');

Route::get('/customer', function () {
    return view('customer');
})->middleware('auth');

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth');
