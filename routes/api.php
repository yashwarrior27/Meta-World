<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::controller(AuthController::class)->group(function(){

    Route::get('/check-referral','Referral');
    Route::post('/register','Register');
    Route::post('/login','Login')->middleware('encryptCookie','startSession');
    Route::get('logout','Logout')->middleware('encryptCookie','startSession');

});
