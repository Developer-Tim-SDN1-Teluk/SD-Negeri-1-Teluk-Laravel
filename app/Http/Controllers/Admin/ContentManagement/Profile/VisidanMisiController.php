<?php

namespace App\Http\Controllers\Admin\ContentManagement\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContentManagement\Profile\VisidanMisi;

class VisidanMisiController extends Controller
{
    public function userview()
    {
        $data = VisidanMisi::where('active',1)->first();
        return view('profile.visimisi',compact('data'));
    }

    public function index()
    {
        $data = Visidanmisi::where('active',1)->get();
        return view('admin.profile.visimisi.index',compact('data'));
    }

    public function add()
    {
        return view('admin.profile.visimisi.add');
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

            $file = new VisidanMisi();
            $file->title=$request->title;
            $file->content=$request->content;
            $file->img = json_encode($data);
            $file->active = 1;
            $file->save();
        }else{
            $visimisi = VisidanMisi::create([
                'title' => $request->pesan,
                'content' => $request->priority,
                'active' => 1
            ]);
        }

        return redirect()->route('adm.visimisi')
                        ->with('success','Berhasil Tambah Data');

    }
}
