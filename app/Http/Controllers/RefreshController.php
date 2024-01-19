<?php

namespace App\Http\Controllers;

use App\Models\Refresh;
use Illuminate\Http\Request;

class RefreshController extends Controller
{
    public function index(){
        $refresh = Refresh::first();
        return view("dashboard.admin.refresh", compact('refresh'));
    }

    public function update(Request $request){
        $refresh = Refresh::first();
        $time = $request->refresh * 60;
        $refresh->update([
            'refresh' => $time
        ]);
        return redirect()->route('refresh.index')->with('success','Waktu refresh berhasil disimpan');
    }
}
