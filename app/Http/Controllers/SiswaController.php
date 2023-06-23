<?php

namespace App\Http\Controllers;

use App\Models\JenisSekolah;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            "title" => "Siswa",
            "Jenis" => JenisSekolah::all(),
            'content' => 'home/pendaftaran/siswa'
        ];
        return view('home.layouts.wrapper', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_lengkap' => 'required',
            'nama_panggilan' => 'required',
            'tempat_tanggal_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'anak_ke' => 'required',
            'jumlah_saudara' => 'required',
            'keadaan_siswa' => 'required',
            'agama' => 'required',
            'golongan_darah'=> 'required',
            'berat_badan' => 'required',
            'tinggi_badan'=> 'required',
            'lingkar_kepala'  => 'required',
            'bahasa_sehari_hari' => 'required',
            'jarak_rumah' => 'required',
            'tinggal_bersama' => 'required',
            'asal_sekolah' => 'required',
            'alamat_sekolah' => 'required',
            'jenis_sekolah' => 'required'
        ]);

        
        // dd($validatedData);
        Siswa::create($validatedData);

        return redirect('/dataortu')->with('success', ' data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
