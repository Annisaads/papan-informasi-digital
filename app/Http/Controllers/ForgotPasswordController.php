<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class ForgotPasswordController extends Controller
{
    public function index(){

        return view("auth.forgotpassword");
    }

    public function forgotPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $admin = Admin::where('email', $request->email)->first();
        if($admin){
            $admin->sendForgotPasswordNotification();
            return redirect()->back()->with('success','Link reset password telah dikirim ke email anda');
        }
        return redirect()->back()->with('error','Email tidak ditemukan');

    }

    public function resetPasswordView(Request $request) {
        return view('auth.changepassword');
    }

    public function resetPassword(Request $request) {
        $admin = Admin::where('email', $request->email)->first();

        $request->validate([
            'email' => 'required',
            'new_password' => [
                'required',
                'confirmed:new_password_confirmation',
                Password::min(8)->mixedCase()->numbers()
            ],
            'new_password_confirmation' => 'required',
        ]);

        if (!$admin) {
            return redirect()->back()->with('error','Email tidak ditemukan');
        }

        if (!$admin->verifyToken($request->token)) {
            return redirect()->back()->with('error','Token tidak valid atau telah kadaluarsa');
        }

        $admin = Admin::where('email', $request->email)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return redirect()->route('login')->with('success','Password berhasil diperbarui');
    }
}
