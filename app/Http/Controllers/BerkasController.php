<?php

namespace App\Http\Controllers;

use App\Models\Berkas;
use Illuminate\Http\Request;

class BerkasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            "title" => "Kelengkapan Berkas",
            'berkas' => Berkas::get(),
            'content' => 'home/pendaftaran/berkas'
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
        $datavalid = $request->validate([
            'ktp' => 'required',
            'akta' => 'required',
            'kk' => 'required',
            'foto' => 'required',
            'rapot_semester_akhir' => 'nullable', //bagi pindahan
            'surat_lulus' => 'nullable', //khusus yang daftar smp
            'surat_minat_bakat' => 'nullable',//khusus yang daftar smp 
            'surat_sehat' => 'required',
            'buku_nikah' => 'required',
        ]);

        //upload ktp
        if($request->hasFile('ktp')){
            $ktp = $request->file('ktp');
            $file_name = time().'-'.$ktp->getClientOriginalName();

            $storage = 'uploads/berkas/';
            $ktp->move($storage, $file_name);
            $data['ktp'] = $storage.$file_name;
        }else{
            $data['ktp'] = null;
        }
        //upload akta
        if($request->hasFile('akta')){
            $akta = $request->file('akta');
            $file_name = time().'-'.$akta->getClientOriginalName();

            $storage = 'uploads/berkas/';
            $akta->move($storage, $file_name);
            $data['akta'] = $storage.$file_name;
        }else{
            $data['akta'] = null;
        }
        //upload kk
        if($request->hasFile('kk')){
            $kk = $request->file('kk');
            $file_name = time().'-'.$kk->getClientOriginalName();

            $storage = 'uploads/berkas/';
            $kk->move($storage, $file_name);
            $data['kk'] = $storage.$file_name;
        }else{
            $data['kk'] = null;
        }
        //upload foto
        if($request->hasFile('foto')){
            $foto = $request->file('foto');
            $file_name = time().'-'.$foto->getClientOriginalName();

            $storage = 'uploads/berkas/';
            $foto->move($storage, $file_name);
            $data['foto'] = $storage.$file_name;
        }else{
            $data['foto'] = null;
        }
        //upload rapot_semester_akhir
        if($request->hasFile('rapot_semester_akhir')){
            $rapot_semester_akhir = $request->file('rapot_semester_akhir');
            $file_name = time().'-'.$rapot_semester_akhir->getClientOriginalName();

            $storage = 'uploads/berkas/';
            $rapot_semester_akhir->move($storage, $file_name);
            $data['rapot_semester_akhir'] = $storage.$file_name;
        }else{
            $data['rapot_semester_akhir'] = null;
        }
        //upload surat_lulus
        if($request->hasFile('surat_lulus')){
            $surat_lulus = $request->file('surat_lulus');
            $file_name = time().'-'.$surat_lulus->getClientOriginalName();

            $storage = 'uploads/berkas/';
            $surat_lulus->move($storage, $file_name);
            $data['surat_lulus'] = $storage.$file_name;
        }else{
            $data['surat_lulus'] = null;
        }
        //upload surat_minat_bakat
        if($request->hasFile('surat_minat_bakat')){
            $surat_minat_bakat = $request->file('surat_minat_bakat');
            $file_name = time().'-'.$surat_minat_bakat->getClientOriginalName();

            $storage = 'uploads/berkas/';
            $surat_minat_bakat->move($storage, $file_name);
            $data['surat_minat_bakat'] = $storage.$file_name;
        }else{
            $data['surat_minat_bakat'] = null;
        }
        //upload surat_sehat
        if($request->hasFile('surat_sehat')){
            $surat_sehat = $request->file('surat_sehat');
            $file_name = time().'-'.$surat_sehat->getClientOriginalName();

            $storage = 'uploads/berkas/';
            $surat_sehat->move($storage, $file_name);
            $data['surat_sehat'] = $storage.$file_name;
        }else{
            $data['surat_sehat'] = null;
        }
        //upload buku_nikah
        if($request->hasFile('buku_nikah')){
            $buku_nikah = $request->file('buku_nikah');
            $file_name = time().'-'.$buku_nikah->getClientOriginalName();

            $storage = 'uploads/berkas/';
            $buku_nikah->move($storage, $file_name);
            $data['buku_nikah'] = $storage.$file_name;
        }else{
            $data['buku_nikah'] = null;
        }

        
        Berkas::create($datavalid);
        return redirect('/berkas')->with('success', ' data berhasil ditambahkan!');
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
