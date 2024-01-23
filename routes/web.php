<?php

use App\Models\Qoute;
use App\Models\Video;
use App\Models\Message;
use App\Models\Announcement;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RefreshController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\ForgotPasswordController;


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
    Route::get("/login", [AuthController::class,"loginView"])->name('login.index');
    Route::post("/login", [AuthController::class,"login"])->name('login');
    Route::get("/register", [AuthController::class,"registerView"])->name('register.index');
    Route::post("/register", [AuthController::class,"register"])->name('register');
    Route::get("/register", [AuthController::class,"registerView"])->name('register.index');
    Route::get('/dashboard-admin/lupa-password', [ForgotPasswordController::class, 'index'])->name('forgotpassword.index');
    Route::post('/dashboard-admin/lupa-password', [ForgotPasswordController::class, 'forgotPassword'])->name('forgotpassword.send');
    Route::get('/reset-password', [ForgotPasswordController::class, 'resetPasswordView'])->name('resetPassword.index');
    Route::post('/reset-password', [ForgotPasswordController::class, 'resetPassword'])->name('resetPassword.reset');

});
Route::middleware('auth:admin')->group(function () {
    // logout
    Route::get("/logout", [AuthController::class,"logout"])->name('logout');

    // dashboard
    Route::get('/dashboard-admin', [DashboardController::class, 'index'])->name('dashboard.index');

    // profile
    Route::get('/dashboard-admin/profil', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('/dashboard-admin/profil/edit-profil', [ProfileController::class,'update'])->name('profile.update');
    Route::delete('/dashboard-admin/hapus-akun', [ProfileController::class,'delete'])->name('profile.delete' );

    // video
    Route::get('/dashboard-admin/video', [VideoController::class, 'index'])->name('video.index');
    Route::post('/dashboard-admin/video/tambah', [VideoController::class,'create'])->name('video.create');
    Route::get('/dashboard-admin/profil/hapus-video', [VideoController::class,'delete'])->name('video.delete');


    // photo
    Route::get('/dashboard-admin/foto', [PhotoController::class, 'index'])->name('photo.index');
    Route::post('/dashboard-admin/foto/tambah', [PhotoController::class,'create'])->name('photo.create');
    Route::get('/dashboard-admin/foto/hapus-foto/{id}', [PhotoController::class,'delete'])->name('photo.delete');


    // announcement
    Route::get('/dashboard-admin/pengumuman', [AnnouncementController::class, 'index'])->name('announcement.index');
    Route::post('/dashboard-admin/pengumuman/tambah', [AnnouncementController::class,'create'])->name('announcement.create');
    Route::get('/dashboard-admin/pengumuman/hapus-pengumuman/{id}', [AnnouncementController::class,'delete'])->name('announcement.delete');
    Route::post('/dashboard-admin/pengumuman/edit-pengumuman/{id}', [AnnouncementController::class,'update'])->name('announcement.update');

    // story
    Route::get('/dashboard-admin/cerita', [StoryController::class, 'index'])->name('story.index');
    Route::post('/dashboard-admin/cerita/tambah-cerita', [StoryController::class,'create'])->name('story.create');
    Route::get('/dashboard-admin/cerita/hapus-foto/{id}', [StoryController::class,'delete'])->name('story.delete');


    // news
    Route::get('/dashboard-admin/berita', [NewsController::class, 'index'])->name('news.index');
    Route::post('/dashboard-admin/berita/tambah', [NewsController::class,'create'])->name('news.create');
    Route::get('/dashboard-admin/berita/hapus-berita/{id}', [NewsController::class,'delete'])->name('news.delete');
    Route::post('/dashboard-admin/berita/edit-berita/{id}', [NewsController::class,'update'])->name('news.update');


    // refresh
    Route::get('/dashboard-admin/refresh', [RefreshController::class, 'index'])->name('refresh.index');
    Route::post('/dashboard-admin/refresh', [RefreshController::class,'update'])->name('refresh.update');

});
