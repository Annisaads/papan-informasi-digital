<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function index(){
        $quote = Quote::latest()->first();
        return view("dashboard.admin.quote", compact('quote'));
    }

    public function create(Request $request) {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'quote' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $path = null;

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('photos', 'public');
        }

        Quote::create([
            'name' => $request->name,
            'position' => $request->position,
            'quote' => $request->quote,
            'photo' => $path,
        ]);

        return redirect()->route('quote.index')->with('success', 'Data berhasil disimpan');
    }

    public function delete(){
        $quote = Quote::latest()->first();
        $quote->delete();

        return redirect()->route('quote.index')->with('delete-success','Pesan tokoh berhasil dihapus');
    }


    public function updatePhoto(Request $request)
    {
        $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('photos', 'public');

            $quote = Quote::find(1);
            $quote->photo = $path;
            $quote->save();
        }

        return redirect()->route('quote.index')->with('update-success', 'Foto tokoh berhasil diupdate');
    }

    public function updateName(Request $request){
        $quote = Quote::latest()->first();
        $quote->update([
            'name'=> $request->name
        ]);
        return redirect()->route('quote.index')->with('update-success','Nama tokoh berhasil diedit');
    }

    public function updatePosition(Request $request){
        $quote = Quote::latest()->first();
        $quote->update([
            'position'=> $request->position
        ]);
        return redirect()->route('quote.index')->with('update-success','Jabatan tokoh berhasil diedit');
    }

    public function updateQoute(Request $request){
        $quote = Quote::latest()->first();
        $quote->update([
            'quote'=> $request->quote
        ]);
        return redirect()->route('quote.index')->with('update-success','Pesan tokoh berhasil diedit');
    }
}
