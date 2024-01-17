<?php

namespace App\Http\Controllers;

use App\Models\Refresh;
use Illuminate\Http\Request;

class RefreshController extends Controller
{
    public function index(){
        $refresh = Refresh::latest()->first();
        return view("dashboard.admin.refresh", compact('refresh'));
    }
}
