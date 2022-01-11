<?php

namespace App\Http\Controllers\Admin\ContentManagement\Berita;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContentManagement\Berita\ContentBerita;

class ContentBeritaController extends Controller
{

    public function userview()
    {
        $data = ContentBerita::where('active',1)->first();
        return view('berita',compact('data'));
    }
    //
    public function index()
    {
        $data = ContentBerita::where('active',1)->get();
        return view('admin.berita.index',compact('data'));
    }

    public function add()
    {
        return view('admin.berita.add');
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

            $file = new ContentBerita();
            $file->title=$request->title;
            $file->content=$request->content;
            $file->img = json_encode($data);
            $file->active = 1;
            $file->save();
        }else{
            $contentberita = ContentBerita::create([
                'title' => $request->pesan,
                'content' => $request->priority,
                'active' => 1
            ]);
        }

        return redirect()->route('adm.contentberita')
                        ->with('success','Berhasil Tambah Data');

    }
}
