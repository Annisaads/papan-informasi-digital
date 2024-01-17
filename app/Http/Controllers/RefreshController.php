<?php

namespace App\Http\Controllers;

use App\Models\Refresh;
use Illuminate\Http\Request;

class RefreshController extends Controller
{
    public function index(){
        $refreshes = Refresh::get();
        return view("dashboard.admin.refresh", compact('refreshes'));
    }

    public function update(Request $request){
        $selected = $request->refresh;
        Refresh::query()->update(['is_selected'=> false]);
        Refresh::where('id', $selected)->update(['is_selected' => true]);

        return redirect()->route('refresh.index')->with('success','Waktu refresh berhasil disimpan');
    }
}
