<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function index(){
        $video = Video::latest()->first();
        return view("dashboard.admin.video", compact("video"));
    }
    public function create(Request $request){
        $request->validate([
            'video' => 'required|unique:videos,video|mimes:mp4|max:102400'
        ]);

        $videoName = "video-profil-" . uniqid() . $request->video->getClientOriginalExtension();
        $path = "video/$videoName" ;
        Storage::disk("public")->put($path, file_get_contents($request->video));
        Video::create([
            'video'=>$path
        ]);
        return redirect()->route('video.index')->with('success','Video berhasil disimpan');
    }

    public function delete(){
        $video = Video::latest()->first();
        Storage::disk('public')->delete($video->video);
        $video->delete();
        return redirect()->route('video.index')->with('delete-success','Video berhasil dihapus');
    }
}
