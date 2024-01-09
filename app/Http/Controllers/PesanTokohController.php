<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\PesanTokoh;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PesanTokohController extends Controller
{
    public function index(){
        $message = PesanTokoh::all();
        return view("dashboard.admin.pesan-tokoh", compact('message'));
    }

    public function create(Request $request) {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'message' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $photoPath = null;

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
        }

        PesanTokoh::create([
            'name' => $request->name,
            'position' => $request->position,
            'message' => $request->message,
            'photo' => $photoPath,
        ]);

        return redirect()->route('pesan-tokoh.index')->with('success', 'Data berhasil disimpan');
    }

    public function delete($id) {
        $message = PesanTokoh::find($id);

        if ($message) {
            if ($message->photo) {
                Storage::disk('public')->delete($message->photo);
            }

            $message->delete();

            return redirect()->route('pesan-tokoh.index')->with('delete-success', 'Data berhasil dihapus');
        }

        return redirect()->route('pesan-tokoh.index')->with('delete-error', 'Data tidak ditemukan.');
    }

    public function update(Request $request){
        $message = PesanTokoh::latest()->first();

        $message->update([
            'name' => $request->name,
            'position' => $request->position,
            'message' => $request->message
        ]);
        return redirect()->route('pesan-tokoh.index')->with('update-success','Data berhasil diedit');
    }

}
