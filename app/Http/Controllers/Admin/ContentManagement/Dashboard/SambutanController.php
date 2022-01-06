<?php

namespace App\Http\Controllers\Admin\ContentManagement\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContentManagement\Dashboard\Sambutan;

class SambutanController extends Controller
{
    //
    public function index()
    {
        $data = Sambutan::where('active',1)->get();
        return view('admin.dashboard.sambutan.index',compact('data'));
    }
}
