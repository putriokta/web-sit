<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Pesan;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    //
    function index()
    {
        $data = [
            'title' => 'Dashboard',
            'pesan' => Pesan::count(),
            'berita' => Berita::count(),
            'galeri' => Galeri::count(),
            'user' => User::count(),
            // 'pesan' => Pesan::count(),
            // 'pesan' => Pesan::count(),
            // 'pesan' => Pesan::count(),
            'content' => 'home/admin/dashboard/index'
        ];
        return view('home.admin.layouts.wrapper', $data);
    }
}
