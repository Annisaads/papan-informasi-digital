<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PesanTokohController;
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
    Route::get("/logout", [AuthController::class,"logout"])->name('logout');
    Route::get('/dashboard-admin', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/dashboard-admin/profil', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/dashboard-admin/video', [VideoController::class, 'index'])->name('video.index');
    Route::get('/dashboard-admin/foto', [FotoController::class, 'index'])->name('foto.index');
    Route::get('/dashboard-admin/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman.index');
    Route::get('/dashboard-admin/pesan-tokoh', [PesanTokohController::class, 'index'])->name('pesan-tokoh.index');
    Route::post('/dashboard-admin/profil/tambah', [ProfileController::class,'create'])->name('profile.create');
    Route::get('/dashboard-admin/profil/hapus-profil', [ProfileController::class,'deleteProfile'])->name('profile.delete.profile');
    Route::post('/dashboard-admin/profil/edit-deskripsi', [ProfileController::class,'updateDescription'])->name('profile.update.description');
    Route::post('/dashboard-admin/profil/edit-alamat-web', [ProfileController::class,'updateWebsiteUrl'])->name('profile.update.website_url');
    Route::post('/dashboard-admin/profil/edit-nomor-telepon', [ProfileController::class,'updatePhoneNumber'])->name('profile.update.phone_number');
    Route::post('/dashboard-admin/profil/edit-sosial-media', [ProfileController::class,'updateSocialMedia'])->name('profile.update.social_media');
    Route::post('/dashboard-admin/video/tambah', [VideoController::class,'create'])->name('video.create');

});

