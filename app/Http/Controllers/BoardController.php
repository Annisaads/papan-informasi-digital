<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Video;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    public function index(){
        $profile = Profile::latest()->first();
        $video = Video::latest()->first();
        return view('board.index', compact('profile', 'video'));
    }

}
