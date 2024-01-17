<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoryController extends Controller
{
    public function index(){
        $story = Story::all();
        return view("dashboard.admin.story", compact('story'));
    }

    public function create(Request $request){
        $request -> validate([
            'story'=> 'required|image|mimes:png,jpg,jpeg|max:10240'
        ]);
        $story = "foto-". uniqid(). "." . $request->story->getClientOriginalExtension();
        $path = "story/$story" ;
        Storage::disk("public")->put($path, file_get_contents($request->story));
        Story::create([
            'story'=>$path
        ]);
        return redirect()->route('story.index')->with('success','Cerita berhasil disimpan');
    }
    public function delete(){
        $story = Story::first();
    if($story) {
        Storage::disk('public')->delete($story->story);
        $story->delete();
        return redirect()->route('story.index')->with('delete-success','Cerita berhasil dihapus');
    } else {
        return redirect()->route('story.index')->with('delete-error','Tidak ada cerita untuk dihapus');
    }
}
}
