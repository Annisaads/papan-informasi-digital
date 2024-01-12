<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Qoute;
use App\Models\Video;
use App\Models\Profile;
use App\Models\Announcement;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $jumlahPengumuman = Announcement::count();
        $jumlahPesanTokoh = Qoute::count();
        $jumlahFoto = Photo::count();
        $jumlahVideo = Video::count();
        $jumlahProfil = Profile::count();
        return view("dashboard.admin.index", compact('jumlahProfil', 'jumlahVideo', 'jumlahFoto', 'jumlahPesanTokoh', 'jumlahPengumuman'));
    }

}
