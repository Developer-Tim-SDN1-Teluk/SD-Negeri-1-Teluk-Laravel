<?php

namespace App\Http\Controllers\Admin\ContentManagement\Fasilitas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ContentManagement\Fasilitas\RuangGuru;

class RuangGuruController extends Controller
{
    public function index()
    {
        $data = RuangGuru::where('active',1)->get();
        return view('admin.fasilitas.ruangguru.index',compact('data'));
    }
}
