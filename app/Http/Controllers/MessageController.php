<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MessageController extends Controller
{
    public function index(){
        $message = Message::all();
        return view("dashboard.admin.message", compact('message'));
    }

    public function create(Request $request) {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'message' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $path = null;

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('photos', 'public');
        }

        Message::create([
            'name' => $request->name,
            'position' => $request->position,
            'message' => $request->message,
            'photo' => $path,
        ]);

        return redirect()->route('message.index')->with('success', 'Data berhasil disimpan');
    }

    public function delete($id) {
        $message = Message::find($id);

        if ($message) {
            if ($message->photo) {
                Storage::disk('public')->delete($message->photo);
            }

            $message->delete();

            return redirect()->route('message.index')->with('delete-success', 'Data berhasil dihapus');
        }

        return redirect()->route('message.index')->with('delete-error', 'Data tidak ditemukan.');
    }

    public function update(Request $request, $id){
        $message = Message::find($id);

        if ($message) {
            $request->validate([
                'name' => 'required',
                'position' => 'required',
                'message' => 'required',
                'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            // Hapus foto lama jika ada foto baru diunggah
            if ($request->hasFile('photo')) {
                Storage::disk('public')->delete($message->photo);
            }

            $path = $message->photo;

            if ($request->hasFile('photo')) {
                $path = $request->file('photo')->store('photo', 'public');
            }

            $message->update([
                'name' => $request->name,
                'position' => $request->position,
                'message' => $request->message,
                'photo' => $path,
            ]);

            return redirect()->route('message.index')->with('update-success','Data berhasil diedit');
        }

        return redirect()->route('message.index')->with('update-error', 'Data tidak ditemukan.');
    }


}
