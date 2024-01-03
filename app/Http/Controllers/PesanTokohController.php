<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesanTokohController extends Controller
{
    public function index(){
        return view("dashboard.admin.pesan-tokoh");
    }
}
