<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminBannerController;
use App\Http\Controllers\AdminBeritaController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminGaleriController;
use App\Http\Controllers\AdminKategoriController;
use App\Http\Controllers\AdminPendaftaranController;
use App\Http\Controllers\AdminPesanController;
use App\Http\Controllers\AdminTentangController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\BerkasController;
use App\Http\Controllers\DataOrtuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisController;
use App\Http\Controllers\SiswaController;
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

Route::get('/', [HomeController::class, 'index']);

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

Route::get('/galeri', function () {
    $data = [
        "title" => "Galeri",
        'content' => 'home/galeri/index'
    ];
    return view('home.layouts.wrapper', $data);
}); 

Route::resource('/siswa', SiswaController::class)->middleware('auth');
Route::resource('/dataortu', DataOrtuController::class);
Route::resource('/berkas', BerkasController::class);

Route::get('/daftar', function () {
    $data = [
        "title" => "Daftar",
        'content' => 'home/auth/regis'
    ];
    return view('home.layouts.wrapper', $data);
});

Route::resource('/regiss', RegisController::class)->middleware('guest');
Route::get('/login', [AdminAuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login/do', [AdminAuthController::class, 'doLogin']);
Route::get('/logout', [AdminAuthController::class, 'logout']);

//======================= ADMIN ====================== //

Route::prefix('/admin')->middleware('auth')->group(function () {

    Route::get('/dashboard', [AdminDashboardController::class, 'index']);

    Route::get('/tentang', [AdminTentangController::class, 'index']);
    Route::put('/tentang/update', [AdminTentangController::class, 'update']);

    Route::resource('/posts/berita', AdminBeritaController ::class);
    Route::resource('/posts/kategori', AdminKategoriController ::class);

    Route::resource('/user', AdminUserController::class);
    Route::resource('/pesan', AdminPesanController::class);
    Route::resource('/banner', AdminBannerController::class);
    Route::resource('/galeri', AdminGaleriController::class);
    Route::resource('/pendaftar', AdminPendaftaranController::class);
});