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
}
