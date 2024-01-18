<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        $news = News::latest()->first();
        return view("dashboard.admin.news", compact("news"));
    }

    public function create(Request $request){
        $data = $request->validate([
            'news' => 'required'
        ]);

        News::create($data);
        return redirect()->route('news.index')->with('success','Berita berhasil disimpan');
    }

    public function delete(){
        $news = News::latest()->first();
        $news->delete();

        return redirect()->route('news.index')->with('delete-success','Berita berhasil dihapus');
    }

    public function update(Request $request){
        $news = News::latest()->first();
        $news->update([
            'news'=> $request->news
        ]);
        return redirect()->route('news.index')->with('update-success','Berita berhasil diedit');
    }
}

