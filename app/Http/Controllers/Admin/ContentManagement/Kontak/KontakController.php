<?php

namespace App\Http\Controllers\Admin\ContentManagement\Kontak;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContentManagement\Kontak\Kontak;


class KontakController extends Controller
{
    public function userview()
    {
        $data = Kontak::where('active',1)->first();
        return view('kontak.kontak',compact('data'));
    }

    public function index()
    {
        $data = Kontak::get();
        return view('admin.kontak.index',compact('data'));
    }

    public function add()
    {
        return view('admin.kontak.add');
    }

    public function store(Request $request)
    {
        // Validasi
        $request->validate([
            'title' =>  'required',
            'alamat' =>  'required',
            'email' =>  'required',
            'hp' =>  'required',
        ]);

        $kontak = Kontak::create([
            'title' => $request->title,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'hp' => $request->hp,
            'active' => 1
        ]);
        

        return redirect()->route('adm.kontak')
                        ->with('success','Berhasil Tambah Data');

    }
}
