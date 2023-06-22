<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Tentang;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    function index()
    {
        $data = [
            // 'tentang' => Tentang::first(),
            'berita' => Berita::limit(4)->get(),
            "title" => "Home",
            'content' => 'home/home/index'
        ];
        return view('home.layouts.wrapper', $data);
    }
}
