<?php

use App\Models\Video;
use App\Models\Message;
use App\Models\Announcement;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\QouteController;
use App\Http\Controllers\QuoteController;
use App\Models\Qoute;
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
    Route::get('/dashboard-admin/foto', [PhotoController::class, 'index'])->name('photo.index');
    Route::get('/dashboard-admin/pengumuman', [AnnouncementController::class, 'index'])->name('announcement.index');
    Route::get('/dashboard-admin/pesan-tokoh', [QuoteController::class, 'index'])->name('quote.index');
    Route::post('/dashboard-admin/profil/tambah', [ProfileController::class,'create'])->name('profile.create');
    Route::get('/dashboard-admin/profil/hapus-profil', [ProfileController::class,'deleteProfile'])->name('profile.delete.profile');
    Route::post('/dashboard-admin/profil/edit-deskripsi', [ProfileController::class,'updateDescription'])->name('profile.update.description');
    Route::post('/dashboard-admin/profil/edit-alamat-web', [ProfileController::class,'updateWebsiteUrl'])->name('profile.update.website_url');
    Route::post('/dashboard-admin/profil/edit-nomor-telepon', [ProfileController::class,'updatePhoneNumber'])->name('profile.update.phone_number');
    Route::post('/dashboard-admin/profil/edit-sosial-media', [ProfileController::class,'updateSocialMedia'])->name('profile.update.social_media');
    Route::post('/dashboard-admin/video/tambah', [VideoController::class,'create'])->name('video.create');
    Route::get('/dashboard-admin/profil/hapus-video', [VideoController::class,'delete'])->name('video.delete');
    Route::post('/dashboard-admin/foto/tambah', [PhotoController::class,'create'])->name('photo.create');
    Route::get('/dashboard-admin/foto/hapus-foto/{id}', [PhotoController::class,'delete'])->name('photo.delete');
    Route::post('/dashboard-admin/pesan-tokoh/tambah', [QuoteController::class,'create'])->name('quote.create');
    Route::get('/dashboard-admin/pesan-tokoh/hapus-pesan-tokoh', [QuoteController::class,'delete'])->name('quote.delete');
    Route::post('/dashboard-admin/pesan-tokoh/edit-pesan-tokoh/{id}', [QuoteController::class,'update'])->name('quote.update');
    Route::post('/dashboard-admin/pengumuman/tambah', [AnnouncementController::class,'create'])->name('announcement.create');
    Route::get('/dashboard-admin/pengumuman/hapus-pengumuman/{id}', [AnnouncementController::class,'delete'])->name('announcement.delete');
    Route::post('/dashboard-admin/pengumuman/edit-pengumuman/{id}', [AnnouncementController::class,'update'])->name('announcement.update');
    Route::post('/dashboard-admin/pesan-tokoh/edit-foto-tokoh', [QuoteController::class,'updatePhoto'])->name('quote.update.photo');
    Route::post('/dashboard-admin/pesan-tokoh/edit-nama-tokoh', [QuoteController::class,'updateName'])->name('quote.update.name');
    Route::post('/dashboard-admin/pesan-tokoh/edit-jabatan-tokoh', [QuoteController::class,'updatePosition'])->name('quote.update.position');
    Route::post('/dashboard-admin/pesan-tokoh/edit-pesan-tokoh', [QuoteController::class,'updateQoute'])->name('quote.update.quote');

});
