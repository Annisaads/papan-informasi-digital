<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Photo;
use App\Models\Quote;
use App\Models\Story;
use App\Models\Video;
use App\Models\Profile;
use App\Models\Refresh;
use App\Models\Announcement;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    public function index(){
        $photo = Photo::all();
        $profile = Profile::latest()->first();
        $videos = Video::latest()->get();
        $announcement= Announcement::latest()->get();
        $refresh = Refresh::first();
        $story = Story::all();
        $news = News::all();
        return view('board.index', compact('profile', 'videos',  'photo', 'announcement', 'refresh', 'story', 'news'));
    }

}
