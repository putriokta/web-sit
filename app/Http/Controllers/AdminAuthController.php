<?php

namespace App\Http\Controllers;

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
        // dd($request->all());
        $data = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($data)){
            $request->session()->regenerate();
            return redirect('/admin/dashboard');
        }

        return back()->with('loginError', 'Gagal Login, Email atau password tidak ditemukan');
    }

    function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/');
    }
    
}
