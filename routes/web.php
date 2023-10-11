<?php

use App\Http\Controllers\AudienceController;
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

Route::get('welcome', function () {
    return view('welcome');
});
//audiences
Route::get('audiences', [AudienceController::class,'index']);
Route::get('printAudiences', [AudienceController::class,'printAudiences']);
Route::get('audience-add', [AudienceController::class,'add']);
Route::post('audience-store', [AudienceController::class,'store']);

// users
Route::get('printUsers', [AuthController::class,'printUsers']);
Route::get('/', [AuthController::class,'loginForm'])->name('connexion');
Route::get('user-add', [AuthController::class,'registerForm']);
Route::post('user-store', [AuthController::class,'store']);
// Route::post('login', [AuthController::class,'login']);
// Route::post('logout', [AuthController::class,'logout']);
Route::get('users', [AuthController::class,'index']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
