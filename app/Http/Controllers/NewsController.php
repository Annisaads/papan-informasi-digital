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

}
