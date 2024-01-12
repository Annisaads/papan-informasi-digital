<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Photo;
use App\Models\Qoute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class QouteController extends Controller
{
    public function index(){
        $qoute = qoute::all();
        return view("dashboard.admin.qoute", compact('qoute'));
    }

    public function create(Request $request) {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'qoute' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $path = null;

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('photos', 'public');
        }

        qoute::create([
            'name' => $request->name,
            'position' => $request->position,
            'qoute' => $request->qoute,
            'photo' => $path,
        ]);

        return redirect()->route('qoute.index')->with('success', 'Data berhasil disimpan');
    }

    public function delete(){
        $announcement = Announcement::latest()->first();
        $announcement->delete();

        return redirect()->route('qoute.index')->with('delete-success','Pesan tokoh berhasil dihapus');
    }

    public function update(Request $request, $id){
        $qoute = qoute::find($id);

        if ($qoute) {
            $request->validate([
                'name' => 'required',
                'position' => 'required',
                'qoute' => 'required',
                'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);


            if ($request->hasFile('photo')) {
                Storage::disk('public')->delete($qoute->photo);
            }

            $path = $qoute->photo;

            if ($request->hasFile('photo')) {
                $path = $request->file('photo')->store('photo', 'public');
            }

            $qoute->update([
                'name' => $request->name,
                'position' => $request->position,
                'qoute' => $request->qoute,
                'photo' => $path,
            ]);

            return redirect()->route('qoute.index')->with('update-success','Data berhasil diedit');
        }

        return redirect()->route('qoute.index')->with('update-error', 'Data tidak ditemukan.');
    }


}
