<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\StakeController;
use App\Http\Controllers\IndexController;
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

Route::controller(IndexController::class)->group(function(){

  Route::get('/','Index');
  Route::get('/login','Login');
  Route::get('/register/{referral}','Register');
  Route::get('/ido','Ido');
});

Route::group(['middleware'=>['auth']],function(){

Route::controller(DashboardController::class)->group(function(){

    Route::get('/dashboard','Index');
});

Route::controller(StakeController::class)->group(function(){

    Route::get('/stake','Index');
});
});

