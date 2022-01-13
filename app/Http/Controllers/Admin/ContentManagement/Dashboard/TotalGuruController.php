<?php

namespace App\Http\Controllers\Admin\ContentManagement\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContentManagement\Dashboard\TotalGuru;

class TotalGuruController extends Controller
{
    //
    public function userview()
    {
        $data = TotalGuru::where('active',1)->first();
        return view('dashboard.totalguru',compact('data'));
    }

    public function index()
    {
        $data = TotalGuru::where('active',1)->get();
        return view('admin.dashboard.totalguru.index',compact('data'));
    }

    public function add()
    {
        return view('admin.dashboard.totalguru.add');
    }

    public function store(Request $request)
    {
        // Validasi
        $request->validate([
            'title' =>  'required',
            'content' => 'required',
            'image.*' => 'mimes:jpeg,jpg,png,gif,JPEG,JPG,PNG'
        ]);

        if($request->hasFile('image')) {
            foreach($request->file('image') as $file)
            {
                $name = uniqid() . '_' . time(). '.' .$file->getClientOriginalName();
                $file->move(public_path().'/img/photo/', $name);
                $data[] = $name;
            }

            $file = new TotalGuru();
            $file->title=$request->title;
            $file->content=$request->content;
            $file->img = json_encode($data);
            $file->active = 1;
            $file->save();
        }else{
            $totalguru = TotalGuru::create([
                'title' => $request->pesan,
                'content' => $request->priority,
                'active' => 1
            ]);
        }

        return redirect()->route('adm.totalguru')
                        ->with('success','Berhasil Tambah Data');

    }
}
