<?php

namespace App\Http\Controllers\Admin\ContentManagement\Kontak;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContentManagement\Kontak\Kontak;


class KontakController extends Controller
{
    public function index()
    {
        $data = Kontak::where('active',1)->get();
        return view('admin.kontak.index',compact('data'));
    }
}
