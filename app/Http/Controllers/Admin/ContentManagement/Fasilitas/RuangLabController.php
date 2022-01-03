<?php

namespace App\Http\Controllers\Admin\ContentManagement\Fasilitas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContentManagement\Fasilitas\RuangLab;

class RuangLabController extends Controller
{
    public function index()
    {
        $data = RuangLab::where('active',1)->get();
        return view('admin.fasilitas.ruanglab.index',compact('data'));
    }
}
