<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContentManagement\Dashboard\Header;
use App\Models\ContentManagement\Dashboard\Sambutan;
use App\Models\ContentManagement\Dashboard\Ekstra;
use App\Models\ContentManagement\Dashboard\Prestasi;

class DashboardController extends Controller
{
    public function index()
    {
        $data['header'] = Header::where('active',1)->first();
        $data['sambutan'] = Sambutan::where('active',1)->first();
        $data['ekstra'] = Ekstra::where('active',1)->get();
        $data['prestasi'] = Prestasi::where('active',1)->get();
        return view('index',compact('data'));
    }
}
