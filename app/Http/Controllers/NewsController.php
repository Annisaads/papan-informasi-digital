<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        $news = News::latest()->get();
        return view("dashboard.admin.news", compact("news"));
    }

    public function create(Request $request){
        $data = $request->validate([
            'news' => 'required'
        ]);

        News::create($data);
        return redirect()->route('news.index')->with('success','Berita berhasil disimpan');
    }

    public function delete($id){
        $news = News::find($id);

        if($news) {
            $news->delete();
            return redirect()->route('news.index')->with('delete-success','Pengumuman berhasil dihapus');
        } else {
            return redirect()->route('news.index')->with('delete-error','Pengumuman tidak ditemukan');
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'news' => 'required',
        ]);

        $news = News::findOrFail($id);

        $news->update([
            'news' => $request->input('news'),
        ]);

        return redirect()->route('news.index')->with('update-success', 'Berita berhasil diperbarui');
    }
}

