<?php

namespace App\Http\Controllers\Admin\ContentManagement\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContentManagement\Dashboard\TotalGuru;

class TotalGuruController extends Controller
{
    //
    public function index()
    {
        $data = TotalGuru::where('active',1)->get();
        return view('admin.dashboard.totalguru.index',compact('data'));
    }
}
