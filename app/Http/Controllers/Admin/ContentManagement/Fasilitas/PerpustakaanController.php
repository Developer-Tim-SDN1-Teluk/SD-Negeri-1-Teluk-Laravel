<?php

namespace App\Http\Controllers\Admin\ContentManagement\Fasilitas;

use App\Models\ContentManagement\Fasilitas\Perpustakaan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PerpustakaanController extends Controller
{
    public function index()
    {
        $data = Perpustakaan::where('active',1)->get();
        return view('admin.fasilitas.perpustakaan.index',compact('data'));
    }
}
