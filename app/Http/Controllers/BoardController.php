<?php

namespace App\Http\Controllers;

use App\Models\PesanTokoh;
use App\Models\Profile;
use App\Models\Video;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    public function index(){
        $message = PesanTokoh::latest()->first();
        $profile = Profile::latest()->first();
        $video = Video::latest()->first();
        return view('board.index', compact('profile', 'video', 'message'));
    }

}
