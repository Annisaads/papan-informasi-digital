<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BoardController;

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

Route::get("/", [BoardController::class,"index"]);
Route::get("/login", [AuthController::class,"index"])->middleware('guest:admin')->name('login.index');
Route::post("/login", [AuthController::class,"login"])->middleware('guest:admin')->name('login');

