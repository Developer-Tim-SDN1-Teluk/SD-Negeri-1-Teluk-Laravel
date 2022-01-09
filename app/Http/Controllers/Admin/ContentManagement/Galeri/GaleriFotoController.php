<?php

namespace App\Http\Controllers\Admin\ContentManagement\Galeri;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContentManagement\Galeri\GaleriFoto;

class GaleriFotoController extends Controller
{
    public function index()
    {
        $data = GaleriFoto::where('active',1)->get();
        return view('admin.galeri.index',compact('data'));
    }
}
