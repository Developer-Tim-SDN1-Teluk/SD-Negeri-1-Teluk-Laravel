<?php

namespace App\Http\Controllers\Admin\ContentManagement\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContentManagement\Dashboard\Header;

class HeaderController extends Controller
{
    public function index()
    {
        $data = Header::where('active',1)->get();
        return view('admin.dashboard.header.index',compact('data'));
    }
}
