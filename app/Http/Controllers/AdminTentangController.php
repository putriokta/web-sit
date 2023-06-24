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
            'tentang' => Tentang::first(),
            'content' => 'home/admin/tentang/index'
        ];
        return view('home.admin.layouts.wrapper', $data);
    }

    public function update(Request $request)
    {
        //
        $tentang = Tentang::first();
        $data = $request->validate([
            'name'      => 'required',
            'desc'     => 'required',
            'desc1'     => 'required',
            'desc2'     => 'required',
            'desc3'     => 'required',
            // 'cover'     => 'required',
            // 'bendera'     => 'required',
            // 'logo1'     => 'required',
            // 'logo2'     => 'required'
        ]);


        //upload cover
        if($request->hasFile('cover')){

            if($tentang->cover != null){
                unlink($tentang->cover);
            }

            $cover = $request->file('cover');
            $file_name = time().'-'.$cover->getClientOriginalName();

            $storage = 'uploads/tentangs/';
            $cover->move($storage, $file_name);
            $data['cover'] = $storage.$file_name;
        }else{
            $data['cover'] = $tentang->cover;
        }

        //upload bendera
        if($request->hasFile('bendera')){

            if($tentang->bendera != null){
                unlink($tentang->bendera);
            }

            $bendera = $request->file('bendera');
            $file_name = time().'-'.$bendera->getClientOriginalName();

            $storage = 'uploads/tentangs/';
            $bendera->move($storage, $file_name);
            $data['bendera'] = $storage.$file_name;
        }else{
            $data['bendera'] = $tentang->bendera;
        }

        //upload logo1
        if($request->hasFile('logo1')){

            if($tentang->logo1 != null){
                unlink($tentang->logo1);
            }

            $logo1 = $request->file('logo1');
            $file_name = time().'-'.$logo1->getClientOriginalName();

            $storage = 'uploads/tentangs/';
            $logo1->move($storage, $file_name);
            $data['logo1'] = $storage.$file_name;
        }else{
            $data['logo1'] = $tentang->logo1;
        }

        //upload logo2
        if($request->hasFile('logo2')){

            if($tentang->logo2 != null){
                unlink($tentang->logo2);
            }

            $logo2 = $request->file('logo2');
            $file_name = time().'-'.$logo2->getClientOriginalName();

            $storage = 'uploads/tentangs/';
            $logo2->move($storage, $file_name);
            $data['logo2'] = $storage.$file_name;
        }else{
            $data['logo2'] = $tentang->logo2;
        }

       $tentang->update($data);
       Alert::success('Sukses', 'Data Berhasil diupdate');
       return redirect('/admin/tentang');
    }
    
}
