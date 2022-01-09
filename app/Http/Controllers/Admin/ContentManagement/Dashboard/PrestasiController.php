<?php

namespace App\Http\Controllers\Admin\ContentManagement\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContentManagement\Dashboard\Prestasi;

class PrestasiController extends Controller
{
    //
    public function index()
    {
        $data = Prestasi::where('active',1)->get();
        return view('admin.dashboard.prestasi.index',compact('data'));
    }
}
