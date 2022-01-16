<?php

namespace App\Http\Controllers\Admin\Pendaftaran;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\FileSiswa;

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
            'nama' =>  'required',
            'nik' => 'required',
            'alamat' => 'required',
            'nama_ibu' => 'required',
            'nama_ayah' => 'required',
            'file_kk' => 'required',
            'file_akta_kelahiran'=> 'required',
            'file_kk.*' => 'mimes:jpeg,jpg,png,gif,JPEG,JPG,PNG',
            'file_akta_kelahiran.*' => 'mimes:jpeg,jpg,png,gif,JPEG,JPG,PNG',
        ]);

        if($request->hasFile('file_kk') && $request->hasFile('file_akta_kelahiran')) {
            $file_kk = $request->file('file_kk');
            $file_akta_kelahiran = $request->file('file_akta_kelahiran');
            $kk = uniqid() . '_' . time(). '.' .$file_kk->getClientOriginalName();
            $akta = uniqid() . '_' . time(). '.' .$file_akta_kelahiran->getClientOriginalName();
            $file_kk->move(public_path().'/img/photo/', $kk);  
            $file_akta_kelahiran->move(public_path().'/img/photo/', $akta); 

            $siswa = new Siswa();
            $file = new FileSiswa();
            
            $siswa->nama=$request->nama;
            $siswa->nik=$request->nik;
            $siswa->alamat=$request->alamat;
            $siswa->nama_ibu=$request->nama_ibu;
            $siswa->nama_ayah=$request->nama_ayah;
            $file->nik = $request->nik;
            $file->file_kk = $kk;
            $file->file_akta_kelahiran = $akta;
            $siswa->active = 0;
            $siswa->save();
            $file->save();
        }

        return redirect()->route('pendaftaran')
                        ->with('success','Pendaftaran Berhasil, Silahkan menghubungi nomor 09231232173 untuk info lebih lanjut');
    }

}
