<?php

namespace App\Http\Controllers\Admin\ContentManagement\Fasilitas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ContentManagement\Fasilitas\RuangGuru;

class RuangGuruController extends Controller
{

    public function userview()
    {
        $data = RuangGuru::where('active',1)->first();
        return view('fasilitas.ruangguru',compact('data'));
    }

    public function index()
    {
        $data = RuangGuru::where('active',1)->get();
        return view('admin.fasilitas.ruangguru.index',compact('data'));
    }
    public function add()
    {
        return view('admin.fasilitas.ruangguru.add');
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

            $file = new RuangGuru();
            $file->title=$request->title;
            $file->content=$request->content;
            $file->img = json_encode($data);
            $file->active = 1;
            $file->save();
        }else{
            $ruangguru = RuangGuru::create([
                'title' => $request->pesan,
                'content' => $request->priority,
                'active' => 1
            ]);
        }

        return redirect()->route('adm.ruangguru')
                        ->with('success','Berhasil Tambah Data');

    }
}
