<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Video;
use App\Models\Profile;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $jumlahFoto = Photo::count();
        $jumlahVideo = Video::count();
        $jumlahProfil = Profile::count();
        return view("dashboard.admin.index", compact('jumlahProfil', 'jumlahVideo', 'jumlahFoto'));
    }

}
