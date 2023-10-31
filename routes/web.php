<?php

use App\Http\Controllers\AudienceController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\UserController;
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


// users
Route::get('/', [UserController::class,'login']);
Route::get('registerForm', [UserController::class,'register']);
Route::get('users', [UserController::class,'index']);
Route::get('showUser_{id}', [UserController::class,'show']);
Route::post('updateUser/{id}', [UserController::class,'update']);
Route::get('deleteUser/{id}', [UserController::class,'delete']);
Route::get('printUsers', [UserController::class,'printUsers']);
Route::get('printUser', [UserController::class,'printUser']);
Route::get('resetPasswordForm', [ResetPasswordController::class,'resetPasswordForm']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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