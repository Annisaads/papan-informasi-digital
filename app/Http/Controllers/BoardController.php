<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Photo;
use App\Models\Qoute;
use App\Models\Video;
use App\Models\Profile;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    public function index(){
        $photo = Photo::all();
        $qoute = Qoute::latest()->first();
        $profile = Profile::latest()->first();
        $video = Video::latest()->first();
        $announcements= Announcement::latest()->get();
        return view('board.index', compact('profile', 'video', 'qoute', 'photo', 'announcements'));
    }

}
