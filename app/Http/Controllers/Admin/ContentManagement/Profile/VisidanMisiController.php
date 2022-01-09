<?php

namespace App\Http\Controllers\Admin\ContentManagement\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContentManagement\Profile\VisidanMisi;

class VisidanMisiController extends Controller
{
    public function index()
    {
        $data = VisidanMisi::where('active',1)->get();
        return view('admin.profile.visimisi.index',compact('data'));
    }
}
