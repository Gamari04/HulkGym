<?php

use App\Http\Controllers\AuthController;
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

Route::get('/admin', function () {
    return view('admin.dashboard');
});
Route::get('login', [AuthController::class, 'LoginPage']);
Route::get('register', [AuthController::class, 'RegisterPage']);
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('register',[AuthController::class, 'register'])->name('register');
