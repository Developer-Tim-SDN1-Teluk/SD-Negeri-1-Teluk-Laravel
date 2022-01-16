<?php

namespace App\Http\Controllers\Admin\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\FileSiswa;

class SiswaController extends Controller
{
    public function index()
    {
        $data = Siswa::where('active',1)
        ->join('file_siswas','file_siswas.nik','=','siswas.nik')->get();
        return view('admin.siswa.index',compact('data'));
    }
}
