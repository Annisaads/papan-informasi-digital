<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function index(){
        $announcement = Announcement::latest()->first();
        return view("dashboard.admin.announcement", compact("announcement"));
    }

    public function create(Request $request){
        $data = $request->validate([
            'announcement' => 'required'
        ]);

        Announcement::create($data);
        return redirect()->route('announcement.index')->with('success','Pengumuman berhasil disimpan');
    }

    public function delete(){
        $announcement = Announcement::latest()->first();
        $announcement->delete();

        return redirect()->route('announcement.index')->with('delete-success','Pengumuman berhasil dihapus');
    }

    public function update(Request $request){
        $announcement = Announcement::latest()->first();
        $announcement->update([
            'announcement'=> $request->announcement
        ]);
        return redirect()->route('announcement.index')->with('update-success','Pengumuman berhasil diedit');
    }
}
