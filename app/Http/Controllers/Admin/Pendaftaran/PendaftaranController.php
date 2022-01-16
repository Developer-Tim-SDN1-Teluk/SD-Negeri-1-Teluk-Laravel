<?php

namespace App\Http\Controllers\Admin\Pendaftaran;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;

class PendaftaranController extends Controller
{
    public function index()
    {
        $data = Siswa::where('active',0)->get();
        return view('admin.pendaftaran.index',compact('data'));
    }

    public function userview()
    {
        return view('pendaftaran.index');
    }

    public function daftar(Request $request)
    {
         // Validasi
         $request->validate([
            'name' =>  'required',
            'nik' => 'required',
            'alamat' => 'required',
            'nama_ibu' => 'required',
            'nama_ayah' => 'required',
            'file_kk' => 'required',
            'file_akte_kelahiran'=> 'required',
            'file_pas_foto' => 'required',
            'image.*' => 'mimes:jpeg,jpg,png,gif,JPEG,JPG,PNG'
        ]);

        if($request->hasFile('image')) {
            foreach($request->file('image') as $file)
            {
                $name = uniqid() . '_' . time(). '.' .$file->getClientOriginalName();
                $file->move(public_path().'/img/photo/', $name);
                $data[] = $name;
            }

            $file = new Siswa();
            $file->name=$request->name;
            $file->nik=$request->nik;
            $file->alamat=$request->alamat;
            $file->nama_ibu=$request->nama_ibu;
            $file->nama_ayah=$request->nama_ayah;
            $file->file_kk=$request->file_kk;
            $file->file_akte_kelahiran=$request->file_akte_kelahiran;
            $file->file_pas_foto=$request->file_pas_foto;
            $file->img = json_encode($data);
            $file->active = 1;
            $file->save();
        }else{
            $siswa = Siswa::create([
                'title' => $request->title,
                'content' => $request->content,
                'active' => 1
            ]);
        }
    }

}
