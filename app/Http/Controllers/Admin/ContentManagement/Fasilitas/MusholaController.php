<?php

namespace App\Http\Controllers\Admin\ContentManagement\Fasilitas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContentManagement\Fasilitas\Mushola;

class MusholaController extends Controller
{
    public function index()
    {
        $data = Mushola::where('active',1)->get();
        return view('admin.fasilitas.mushola.index',compact('data'));
    }
}
