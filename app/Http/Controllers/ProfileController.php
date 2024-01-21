<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        $admin = Auth::guard('admin')->user();
        return view("dashboard.admin.profile", compact("admin"));
    }

    public function update(Request $request){
        $admin = Auth::guard('admin')->user();
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:100|unique:admins,email,' . $admin->id,
            'username' => 'required|string|unique:admins,username,'. $admin->id,
        ]);

        Admin::where('id', $admin->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
        ]);
        return redirect()->route('profile.index')->with('success','Profil berhasil diedit');
}
}
