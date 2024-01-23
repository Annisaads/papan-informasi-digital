<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Photo;
use App\Models\Story;
use App\Models\Video;
use App\Models\Announcement;

class DashboardController extends Controller
{
    public function index(){
        $jumlahPengumuman = Announcement::count();
        $jumlahBerita = News::count();
        $jumlahFoto = Photo::count();
        $jumlahVideo = Video::count();
        $jumlahCerita = Story::count();
        return view("dashboard.admin.index", compact('jumlahPengumuman', 'jumlahBerita', 'jumlahFoto', 'jumlahVideo', 'jumlahCerita'));
    }

}
