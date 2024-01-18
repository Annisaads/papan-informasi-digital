<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    public function index(){
        $photo = Photo::orderBy('created_at', 'desc')->get();
        return view("dashboard.admin.photo", compact("photo"));
       }

    public function create(Request $request){
        $request -> validate([
            'photo'=> 'required|image|mimes:png,jpg,jpeg|max:10240'
        ]);
        $photoName = "foto-". uniqid(). "." . $request->photo->getClientOriginalExtension();
        $path = "photo/$photoName" ;
        Storage::disk("public")->put($path, file_get_contents($request->photo));
        Photo::create([
            'photo'=>$path
        ]);
        return redirect()->route('photo.index')->with('success','Foto berhasil disimpan');
    }
    public function delete(){
        $photo = Photo::latest()->first();
    if($photo) {
        Storage::disk('public')->delete($photo->photo);
        $photo->delete();
        return redirect()->route('photo.index')->with('delete-success','Foto berhasil dihapus');
    } else {
        return redirect()->route('photo.index')->with('delete-error','Tidak ada foto untuk dihapus');
    }
}
}
