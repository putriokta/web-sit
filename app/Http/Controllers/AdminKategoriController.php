<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = [
            'title' => 'Manajemen Kategori',
            'kategori' => Kategori::get(),
            'content' => 'home/admin/kategori/index'
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
            'title' => 'Tambah Kategori',
            'content' => 'home/admin/kategori/add'
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
            'name'      => 'required'
        ]);

       Kategori::create($data);
       Alert::success('Sukses', 'Data Berhasil ditambahkan');
       return redirect('/admin/posts/kategori');

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
            'title' => 'Edit Kategori',
            'kategori'  => Kategori::find($id),
            'content' => 'home/admin/kategori/add'
        ];
        return view('home.admin.layouts.wrapper', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $kategori = Kategori::find($id);
        $data = $request->validate([
            'name'      => 'required'
        ]);

       $kategori->update($data);
       Alert::success('Sukses', 'Data Berhasil diupdate');
       return redirect('/admin/posts/kategori');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $kategori = Kategori::find($id); 
        $kategori->delete();
        Alert::success('Sukses', 'Data Berhasil dihapus');
        return redirect('/admin/posts/kategori');
    }
}
