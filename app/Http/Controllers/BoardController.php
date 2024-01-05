<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class BoardController extends Controller
{
    public function index(){
        $profile = Profile::first();
        return view('board.index', compact('profile'));
    }
    
}
