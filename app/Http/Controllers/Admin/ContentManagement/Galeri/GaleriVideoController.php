<?php

namespace App\Http\Controllers\Admin\ContentManagement\Galeri;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContentManagement\Galeri\GaleriVideo;

class GaleriVideoController extends Controller
{
    public function index()
    {
        $data = GaleriVideo::where('active',1)->get();
        return view('admin.galeri.galerivideo',compact('data'));
    }
}
