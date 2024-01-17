<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function index(){
        $story = Story::latest()->first();
        return view("dashboard.admin.story", compact('story'));
    }
}
