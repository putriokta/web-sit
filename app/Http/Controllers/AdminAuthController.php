<?php

namespace App\Http\Controllers;

use App\Models\role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    //
    function index()
    {
        $data = User::with('role')->get();
        $data = [
            "title" => "Login",
            'content' => 'home/auth/login'
        ];
        return view('home.layouts.wrapper', $data);
    }

    function doLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($data)){

            if (auth()->user()->role_id == 1) {
                return redirect('/admin/dashboard');
            }elseif (auth()->user()->role_id == 2) {
                return redirect('/');
            // $request->session()->regenerate();
            // return redirect('/admin/dashboard');
        }else{
            return back()->with('loginError', 'Gagal Login, Email atau password tidak ditemukan');
            }
        }
    }
    function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/');
    }
}