<?php

use App\Http\Controllers\AudienceController;
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
    return view('welcome');
});
//audiences
Route::get('audiences', [AudienceController::class,'index']);
Route::get('audience-add', [AudienceController::class,'add']);
Route::post('audience-store', [AudienceController::class,'store']);

// utilisateurs
Route::get('user-add', [AudienceController::class,'add']);
Route::post('user', [AudienceController::class,'save']);


// Route::get('audiences', function () {
//     return redirect('http://localhost:3000/api/users');
// });

Route::get('utilisateur', function () {
    return view('pages/utilisateur');
});

Route::get('utilisateurs', function () {
    return view('pages/utilisateurs');
});
