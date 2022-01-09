<?php

namespace App\Http\Controllers\Admin\ContentManagement\Fasilitas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContentManagement\Fasilitas\Kantin;

class KantinController extends Controller
{
    public function index()
    {
        $data = Kantin::where('active',1)->get();
        return view('admin.fasilitas.kantin.index',compact('data'));
    }
}
