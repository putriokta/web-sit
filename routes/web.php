<?php

use App\Http\Controllers\AdminBannerController;
use App\Http\Controllers\AdminBeritaController;
use App\Http\Controllers\AdminGaleriController;
use App\Http\Controllers\AdminKategoriController;
use App\Http\Controllers\AdminTentangController;
use App\Http\Controllers\AdminUserController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // return view('home/index');
    $data = [
        "title" => "Home",
        'content' => 'home/home/index'
    ];
    return view('home.layouts.wrapper', $data);
});

Route::get('/tentang', function () {
    $data = [
        "title" => "Tentang",
        'content' => 'home/tentang/index'
    ];
    return view('home.layouts.wrapper', $data);
});

Route::get('/kontak', function () {
    $data = [
        "title" => "Kontak",
        'content' => 'home/kontak/index'
    ];
    return view('home.layouts.wrapper', $data);
});

Route::get('/artikel', function () {
    $data = [
        "title" => "Berita",
        'content' => 'home/artikel/index'
    ];
    return view('home.layouts.wrapper', $data);
});

// Route::get('/pengumuman', function () {
//     $data = [
//         "title" => "Pengumuman",
//         'content' => 'home/pengumuman/index'
//     ];
//     return view('home.layouts.wrapper', $data);
// });

Route::get('/galeri', function () {
    $data = [
        "title" => "Galeri",
        'content' => 'home/galeri/index'
    ];
    return view('home.layouts.wrapper', $data);
});

Route::get('/guru', function () {
    $data = [
        "title" => "Guru",
        'content' => 'home/pendaftaran/guru'
    ];
    return view('home.layouts.wrapper', $data);
});

Route::get('/siswa', function () {
    $data = [
        "title" => "Siswa",
        'content' => 'home/pendaftaran/siswa'
    ];
    return view('home.layouts.wrapper', $data);
});

Route::get('/staff', function () {
    $data = [
        "title" => "Staff",
        'content' => 'home/pendaftaran/staff'
    ];
    return view('home.layouts.wrapper', $data);
});

Route::get('/daftar', function () {
    $data = [
        "title" => "Daftar",
        'content' => 'home/auth/regis'
    ];
    return view('home.layouts.wrapper', $data);
});

Route::get('/login', function () {
    $data = [
        "title" => "Login",
        'content' => 'home/auth/login'
    ];
    return view('home.layouts.wrapper', $data);
});

// ADMIN //

Route::prefix('/admin')->group(function () {
    Route::get('/dashboard', function(){
        $data = [
            'title' => 'Dashboard',
            'content' => 'home/admin/dashboard/index'
        ];
        return view('home.admin.layouts.wrapper', $data);
    });

    Route::get('/tentang', [AdminTentangController::class, 'index']);
    Route::put('/update', [AdminTentangController::class, 'update']);

    Route::resource('/posts/berita', AdminBeritaController ::class);
    Route::resource('/posts/kategori', AdminKategoriController ::class);

    Route::resource('/user', AdminUserController::class);
    Route::resource('/banner', AdminBannerController::class);
    Route::resource('/galeri', AdminGaleriController::class);
});