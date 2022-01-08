<?php

namespace App\Http\Controllers\Admin\ContentManagement\Berita;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContentManagement\Berita\ContentBerita;

class ContentBeritaController extends Controller
{
    //
    public function index()
    {
        $data = ContentBerita::where('active',1)->get();
        return view('admin.berita.index',compact('data'));
    }
}
