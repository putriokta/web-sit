<?php

namespace App\Http\Controllers;

use App\Models\DataOrtu;
use Illuminate\Http\Request;

class DataOrtuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = [
            "title" => "Data Orang Tua/Wali",
            'content' => 'home/pendaftaran/dataortu'
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
        //
        $validatedData = $request->validate([
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'ttl_a' => 'required',
            'ttl_i' => 'required',
            'tl_a' => 'required',
            'tl_i' => 'required',
            'agama_a' => 'required',
            'agama_i' => 'required',
            'alamat_a' => 'required',
            'alamat_i' => 'required',
            'no_hp_a' => 'required',
            'no_hp_i' => 'required',
            'pen_a' => 'required',
            'pen_i' => 'required',
            'jurusan_a' => 'required',
            'jurusan_i' => 'required',
            'email_a' => 'required',
            'email_i' => 'required',
            'hubungan_a' => 'required',
            'hubungan_i' => 'required',
            'pekerjaan_a' => 'required',
            'pekerjaan_i' => 'required',
            'nama_perusahaan_a' => 'required',
            'nama_perusahaan_i' => 'required',
            'bidang_perusahaan_a' => 'required',
            'bidang_perusahaan_i' => 'required',
            'alamat_kantor_a' => 'required',
            'alamat_kantor_i' => 'required',
            'penghasilan_perbulan_a' => 'required',
            'penghasilan_perbulan_i' => 'required',
        ]);


        dd($validatedData);

        DataOrtu::create($validatedData);

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
