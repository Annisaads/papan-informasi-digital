<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::middleware('guest:admin')->group(function () {
    Route::get("/login", [AuthController::class,"index"])->name('login.index');
    Route::post("/login", [AuthController::class,"login"])->name('login');
});
Route::middleware('auth:admin')->group(function () {
    Route::get('/dashboard-admin', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/dashboard-admin/profil', [ProfileController::class, 'index'])->name('profile.index');
});

