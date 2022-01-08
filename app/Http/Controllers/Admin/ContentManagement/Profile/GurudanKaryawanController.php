<?php

namespace App\Http\Controllers\Admin\ContentManagement\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContentManagement\Profile\GurudanKaryawan;

class GurudanKaryawanController extends Controller
{
    public function index()
    {
        $data = GurudanKaryawan::where('active',1)->get();
        return view('admin.profile.gurudankaryawan.index',compact('data'));
    }
}
