<?php

use App\Http\Controllers\AudienceController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeController;
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

Route::get('welcome', function () {
    return view('welcome');
});

//employés
Route::get('employes', [EmployeController::class,'index']);
Route::get('createEmploye', [EmployeController::class,'create']);
Route::post('storeEmploye', [EmployeController::class,'store']);
Route::get('showEmploye_{id}', [EmployeController::class,'show']);
Route::post('destroyl/{id}', [EmployeController::class,'destroyl']);
Route::get('delete/{id}', [EmployeController::class,'destroy']);

//audiences
Route::get('audiences', [AudienceController::class,'index']);
Route::get('showAudience_{id}', [AudienceController::class,'showAudience']);
Route::post('updateAudience/{id}', [AudienceController::class,'updateAudience']);
Route::get('deleteAudience/{id}', [AudienceController::class,'deleteAudience']);
Route::get('printAudiences', [AudienceController::class,'printAudiences']);
Route::get('printAudience', [AudienceController::class,'printAudience']);
Route::get('createAudience', [AudienceController::class,'createAudience']);
Route::post('storeAudience', [AudienceController::class,'storeAudience']);

// users
Route::get('/', [AuthController::class,'loginForm']);
Route::post('loginUser', [AuthController::class,'loginUser']);
Route::get('users', [AuthController::class,'index']);
Route::get('showUser_{id}', [AuthController::class,'showUser']);
Route::post('updateUser/{id}', [AuthController::class,'updateUser']);
Route::get('deleteUser/{id}', [AuthController::class,'deleteUser']);
Route::get('printUsers', [AuthController::class,'printUsers']);
Route::get('registerForm', [AuthController::class,'createUser']);
Route::post('storeUser', [AuthController::class,'storeUser']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
