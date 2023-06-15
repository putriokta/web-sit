<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminGaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = [
            'title' => 'Manajemen Galeri',
            'galeri' => Galeri::get(),
            'content' => 'home/admin/galeri/index'
        ];
        return view('home.admin.layouts.wrapper', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data = [
            'title' => 'Tambah Galeri',
            'content' => 'home/admin/galeri/add'
        ];
        return view('home.admin.layouts.wrapper', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
        $data = $request->validate([
            'title'      => 'required',
            'desc'     => 'required',
            'gambar'    => 'required'
        ]);

        //upload gambar
        if($request->hasFile('gambar')){
            $gambar = $request->file('gambar');
            $file_name = time().'-'.$gambar->getClientOriginalName();

            $storage = 'uploads/galeris/';
            $gambar->move($storage, $file_name);
            $data['gambar'] = $storage.$file_name;
        }else{
            $data['gambar'] = null;
        }

       Galeri::create($data);
       Alert::success('Sukses', 'Data Berhasil ditambahkan');
       return redirect('/admin/galeri');

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
        $data = [
            'title' => 'Edit Galeri',
            'galeri'  => Galeri::find($id),
            'content' => 'home/admin/galeri/add'
        ];
        return view('home.admin.layouts.wrapper', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $galeri = Galeri::find($id);
        $data = $request->validate([
            'title'      => 'required',
            'desc'     => 'required',
            // 'gambar'    => 'required'
        ]);

        //upload gambar
        if($request->hasFile('gambar')){

            if($galeri->gambar != null){
                unlink($galeri->gambar);
            }

            $gambar = $request->file('gambar');
            $file_name = time().'-'.$gambar->getClientOriginalName();

            $storage = 'uploads/galeris/';
            $gambar->move($storage, $file_name);
            $data['gambar'] = $storage.$file_name;
        }else{
            $data['gambar'] = $galeri->gambar;
        }

       $galeri->update($data);
       Alert::success('Sukses', 'Data Berhasil diupdate');
       return redirect('/admin/galeri');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $galeri = Galeri::find($id);

        if($galeri->gambar != null){
            unlink($galeri->gambar);
        }
        
        $galeri->delete();
        Alert::success('Sukses', 'Data Berhasil dihapus');
        return redirect('/admin/galeri');
    }
}
