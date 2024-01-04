<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $profile = Profile::first();
        return view("dashboard.admin.profile", compact("profile"));
    }

    public function create(Request $request){
        $data = $request->validate([
            'description' => 'required',
            'website_url' => 'required',
            'phone_number' => 'required',
            'social_media' => 'required'
        ]);
        if (Profile::count()>0){
            return redirect()->route('profile.index')->with('error','Data sudah ada');
        }
        Profile::create($data);
        return redirect()->route('profile.index')->with('success','Data berhasil disimpan');
    }
    public function deleteDescription(){
        $profile = Profile::first();
        $profile->update([
            'description'=> null
        ]);
        return redirect()->route('profile.index')->with('delete-success','Deskripsi berhasil dihapus');
    }
    public function deleteWebsiteUrl(){
        $profile = Profile::first();
        $profile->update([
            'website_url'=> null
        ]);
        return redirect()->route('profile.index')->with('delete-success','Alamat web berhasil dihapus');
    }
    public function deletePhoneNumber(){
        $profile = Profile::first();
        $profile->update([
            'phone_number'=> null
        ]);
        return redirect()->route('profile.index')->with('delete-success','Nomor telepon berhasil dihapus');
    }
    public function deleteSocialMedia(){
        $profile = Profile::first();
        $profile->update([
            'social_media'=> null
        ]);
        return redirect()->route('profile.index')->with('delete-success','Sosial media berhasil dihapus');
    }
    public function updateDescription(Request $request){
        $profile = Profile::first();
        $profile->update([
            'description'=> $request->description
        ]);
        return redirect()->route('profile.index')->with('update-success','Deskripsi berhasil diedit');
    }
    public function updateWebsiteUrl(Request $request){
        $profile = Profile::first();
        $profile->update([
            'website_url'=> $request->website_url
        ]);
        return redirect()->route('profile.index')->with('update-success','Alamat web berhasil diedit');
    }
    public function updatePhoneNumber(Request $request){
        $profile = Profile::first();
        $profile->update([
            'phone_number'=> $request->phone_number
        ]);
        return redirect()->route('profile.index')->with('update-success','Nomor telepon berhasil diedit');
    }
    public function updateSocialMedia(Request $request){
        $profile = Profile::first();
        $profile->update([
            'social_media'=> $request->social_media
        ]);
        return redirect()->route('profile.index')->with('update-success','Sosial media berhasil diedit');
    }

}
