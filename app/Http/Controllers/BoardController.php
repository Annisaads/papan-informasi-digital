<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Video;
use App\Models\Profile;
use App\Models\Message;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    public function index(){
        $photo = Photo::latest()->first();
        $message = Message::latest()->first();
        $profile = Profile::latest()->first();
        $video = Video::latest()->first();
        return view('board.index', compact('profile', 'video', 'message', 'photo'));
    }

}
