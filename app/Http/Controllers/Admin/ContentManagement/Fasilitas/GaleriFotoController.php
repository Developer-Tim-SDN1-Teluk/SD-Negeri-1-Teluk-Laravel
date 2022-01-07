<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
namespace App\Models\ContentManagement\Fasilitas\GaleriFoto;

class GaleriFotoController extends Controller
{
    public function index()
    {
        $data = GaleriFoto::where('active',1)->get();
        return view('admin.fasilitas.galerifoto.index',compact('data'));
    }
}
