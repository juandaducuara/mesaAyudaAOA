<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [registerController::class,'show'] );

Route::post('/register', [registerController::class,'register']);

Route::get('/login', [loginController::class,'show'] );

Route::post('/login', [loginController::class,'login']);

Route::get('/home', [homeController::class,'index']);
