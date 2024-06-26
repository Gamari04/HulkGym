<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\TypeController;
use App\Http\Controllers\admin\UserController as userAdmin;
use App\Http\Controllers\user\UserController as user;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Coach\CoachController;
use App\Http\Controllers\Coach\TrainingProgramController;
use App\Http\Controllers\Coach\ExerciceController;
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

Route::get('/about', function () {
    return view('Home.about');
});


// Route::get('/exercice', function () {
//     return view('Home.exercices');
// });

Route::resource('training_programs',TrainingProgramController::class);
Route::get('login', [AuthController::class, 'LoginPage']);
Route::get('register', [AuthController::class, 'RegisterPage']);
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('register',[AuthController::class, 'register'])->name('register');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth','checkAdmin'])->group(function () {
    Route::resource('users',userAdmin::class);
    Route::get('/admin', function () {
        return view('admin.dashboard');
    });
    Route::resource('categories',CategoryController::class);
    Route::get('showRequests', [CoachController::class, 'showRequests'])->name('coachRequest');
    Route::get('AcceptRequests/{id}', [CoachController::class, 'AcceptCoach'])->name('AcceptCoach');
    Route::get('RejectRequests/{id}', [CoachController::class, 'RejectCoach'])->name('RejectCoach');
    Route::get('BannedUser/{id}', [userAdmin::class, 'BannedUser'])->name('BannedUser');
    Route::resource('types',TypeController::class);
    

});

Route::middleware(['auth'])->group(function () {
    Route::get('MyPrograms/{id}',[CoachController::class, 'showCreatedPrograms'])->name('MyPrograms');
    Route::resource('exercices',ExerciceController::class);
    Route::resource('coaches',CoachController::class);
    Route::post('/session/{product}', 'App\Http\Controllers\StripeController@session')->name('session');
    Route::get('/success/{productId}', 'App\Http\Controllers\StripeController@success')->name('success');
    Route::get('/exercises/{id}', [ExerciceController::class,'show'])->name('exercise.show');
    Route::post('/training/{trainingProgram}/follow', [TrainingProgramController::class, 'follow'])->name('training.follow');
    Route::get('/training-programs/{trainingProgram}', [TrainingProgramController::class,'showExercises'])->name('showExercices');
    Route::get('/profile', [user::class, 'showProfile'])->name('profile');

});

Route::resource('users',user::class);



Route::resource('products',ProductController::class);
Route::get('/', [ProductController::class, 'showProduct']);
Route::get('/product', [ProductController::class, 'allProduct'])->name('allProducts');








