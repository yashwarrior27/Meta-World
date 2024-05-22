<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CryptoController;
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

Route::group(['middleware'=>['auth','encryptCookie','startSession']],function(){

    Route::controller(CryptoController::class)->group(function(){

        Route::get('/check-trans','CheckTrans');
        Route::post('/create-trans','CreateTrans');
        Route::get('/success-trans','SuccessTrans');

    });

});
