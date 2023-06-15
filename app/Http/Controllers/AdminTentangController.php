<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tentang;
use RealRashid\SweetAlert\Facades\Alert;

class AdminTentangController extends Controller
{
    //
    public function index()
    {
        //
        $data = [
            'title' => 'Manajemen Tentang',
            'tentang' => Tentang::get(),
            'content' => 'home/admin/tentang/index'
        ];
        return view('home.admin.layouts.wrapper', $data);
    }

    public function update(Request $request, string $id)
    {
        //
        $tentang = Tentang::find($id);
        $data = $request->validate([
            'headline'      => 'required',
            'desc'     => 'required',
            // 'urutan'     => 'required',
            // 'gambar'    => 'required'
        ]);

        $data['urutan'] = 0;

        //upload gambar
        if($request->hasFile('gambar')){

            if($tentang->gambar != null){
                unlink($tentang->gambar);
            }

            $gambar = $request->file('gambar');
            $file_name = time().'-'.$gambar->getClientOriginalName();

            $storage = 'uploads/tentangs/';
            $gambar->move($storage, $file_name);
            $data['gambar'] = $storage.$file_name;
        }else{
            $data['gambar'] = $tentang->gambar;
        }

       $tentang->update($data);
       Alert::success('Sukses', 'Data Berhasil diupdate');
       return redirect('/admin/tentang');
    }
    
}
