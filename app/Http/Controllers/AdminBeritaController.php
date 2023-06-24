<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminBeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = [
            'title' => 'Manajemen Berita',
            'berita' => Berita::with('kategori')->get(),
            'content' => 'home/admin/berita/index'
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
            'title' => 'Tambah Berita',
            'kategori' => Kategori::get(),
            'content' => 'home/admin/berita/add'
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
            'kategori_id' => 'required',
            'body'     => 'required',
            'cover'    => 'required'
        ]);

        //upload gambar
        if($request->hasFile('cover')){
            $cover = $request->file('cover');
            $file_name = time().'-'.$cover->getClientOriginalName();

            $storage = 'uploads/beritas/';
            $cover->move($storage, $file_name);
            $data['cover'] = $storage.$file_name;
        }else{
            $data['cover'] = null;
        }

       Berita::create($data);
       Alert::success('Sukses', 'Data Berhasil ditambahkan');
       return redirect('/admin/posts/berita');

    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data = [
            'title' => 'Edit Berita',
            'berita'  => Berita::find($id),
            'content' => 'home/admin/berita/show'
        ];
        return view('home.admin.layouts.wrapper', $data);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = [
            
            'title' => 'Edit Berita',
            'kategori' => Kategori::all(),
            'berita'  => Berita::find($id),
            'content' => 'home/admin/berita/add'
        ];
        return view('home.admin.layouts.wrapper', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $berita = Berita::find($id);
        $data = $request->validate([
            'title'      => 'required',
            'kategori_id' => 'required',
            'body'     => 'required',
            // 'cover'    => 'required'
        ]);

        //upload gambar
        if($request->hasFile('cover')){

            if($berita->cover != null){
                unlink($berita->cover);
            }

            $cover = $request->file('cover');
            $file_name = time().'-'.$cover->getClientOriginalName();

            $storage = 'uploads/beritas/';
            $cover->move($storage, $file_name);
            $data['cover'] = $storage.$file_name;
        }else{
            $data['cover'] = $berita->cover;
        }

       $berita->update($data);
       Alert::success('Sukses', 'Data Berhasil diupdate');
       return redirect('/admin/posts/berita');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $berita = Berita::find($id);

        if($berita->cover != null){
            unlink($berita->cover);
        }
        
        $berita->delete();
        Alert::success('Sukses', 'Data Berhasil dihapus');
        return redirect('/admin/posts/berita');
    }
}
