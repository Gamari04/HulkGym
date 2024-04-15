<?php

use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\admin\CategoryController;
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

Route::get('/', function () {
    return view('home.index');
});
Route::get('/admin', function () {
    return view('admin.dashboard');
});
Route::get('/edit', function () {
    return view('admin.category.edit');
});
Route::get('login', [AuthController::class, 'LoginPage']);
Route::get('register', [AuthController::class, 'RegisterPage']);
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('register',[AuthController::class, 'register'])->name('register');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');


Route::resource('users',UserController::class);
Route::resource('categories',CategoryController::class);
Route::post('submit', [UserController::class, 'submitCoachRequest'])->name('submit');

Route::get('BannedUser/{id}', [UserController::class, 'BannedUser'])->name('BannedUser');