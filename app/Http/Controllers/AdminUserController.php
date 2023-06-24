<?php

namespace App\Http\Controllers;

use App\Models\role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;


class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = [
            'title' => 'Manajemen User',
            'user' => User::get(),
            'content' => 'home/admin/user/index'
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
            'title' => 'Tambah User',
            'content' => 'home/admin/user/add',
            'roles' => role::all()
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
            'name'      => 'required',
            'email'     => 'required|unique:users',
            'role_id'     => 'required',
            'password'     => 'required|min:3',
            're_password'     => 'required|same:password'
        ]);

        $data['password']   = Hash::make($data['password']);

       User::create($data);
       Alert::success('Sukses', 'Data Berhasil ditambahkan');
       return redirect('/admin/user');

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
            'title' => 'Edit User',
            'user'  => User::where('id', $id)->firstOrFail(),
            'content' => 'home/admin/user/edit',
            'roles' => role::all()
        ];
        return view('home.admin.layouts.wrapper', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $user = User::find($id);
        $data = $request->validate([
            'name'      => 'required',
            'email'     => 'required|unique:users,email,'.$user->id,
            'role_id'     => 'required',
            'password'     => 'min:3',
            're_password'     => 'same:password'
        ]);

        if($request->password){
            $data['password']   = Hash::make($data['password']);
        }else{
            $data['password'] = $user->password;
        }

       $user->update($data);
       Alert::success('Sukses', 'Data Berhasil diupdate');
       return redirect('/admin/user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $user = User::find($id);
        $user->delete();
        Alert::success('Sukses', 'Data Berhasil dihapus');
        return redirect('/admin/user');
    }
}
