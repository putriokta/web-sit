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
        $datavalid = $request->validate([
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'nama_wali' => '',
            'ttl_a' => 'required',
            'ttl_i' => 'required',
            'ttl_w' => '',
            'tl_a' => 'required',
            'tl_i' => 'required',
            'tl_w' => '',
            'agama_a' => 'required',
            'agama_i' => 'required',
            'agama_w' => '',
            'alamat_a' => 'required',
            'alamat_i' => 'required',
            'alamat_w' => '',
            'no_hp_a' => 'required',
            'no_hp_i' => 'required',
            'no_hp_w' => '',
            'pend_a' => 'required',
            'pend_i' => 'required',
            'pend_w' => '',
            'jurusan_a' => 'required',
            'jurusan_i' => 'required',
            'jurusan_w' => '',
            'email_a' => 'required',
            'email_i' => 'required',
            'email_w' => '',
            'hubungan_a' => 'required',
            'hubungan_i' => 'required',
            'hubungan_w' => '',
            'pekerjaan_a' => 'required',
            'pekerjaan_i' => 'required',
            'pekerjaan_w' => '',
            'nama_perusahaan_a' => 'required',
            'nama_perusahaan_i' => 'required',
            'nama_perusahaan_w' => '',
            'bidang_perusahaan_a' => 'required',
            'bidang_perusahaan_i' => 'required',
            'bidang_perusahaan_w' => '',
            'alamat_kantor_a' => 'required',
            'alamat_kantor_i' => 'required',
            'alamat_kantor_w' => '',
            'penghasilan_perbulan_a' => 'required',
            'penghasilan_perbulan_i' => 'required',
            'penghasilan_perbulan_w' => '',
        ]);


        //dd($datavalid);
        DataOrtu::create($datavalid);

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
