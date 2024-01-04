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
        Profile::create($data);
        return redirect()->route('profile.index')->with('success','Data berhasil disimpan');
    }
}
