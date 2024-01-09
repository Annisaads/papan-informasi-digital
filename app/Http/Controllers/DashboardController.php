<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $jumlahFoto = Profile::count();
        $jumlahVideo = Profile::count();
        $jumlahProfil = Profile::count();
        return view("dashboard.admin.index", compact('jumlahProfil', 'jumlahVideo', 'jumlahFoto'));
    }

}
