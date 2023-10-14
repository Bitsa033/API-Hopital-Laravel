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
Route::get('showAudience_{id}', [AudienceController::class,'showAudience']);
Route::put('updateAudience', [AudienceController::class,'updateAudience']);
Route::get('printAudiences', [AudienceController::class,'printAudiences']);
Route::get('printAudience', [AudienceController::class,'printAudience']);
Route::get('createAudience', [AudienceController::class,'createAudience']);
Route::post('storeAudience', [AudienceController::class,'storeAudience']);

// users
Route::get('/', [AuthController::class,'loginForm']);
Route::get('users', [AuthController::class,'index']);
Route::get('printUsers', [AuthController::class,'printUsers']);
// Route::get('registerForm', [AuthController::class,'registerForm']);
Route::post('storeUser', [AuthController::class,'store']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
