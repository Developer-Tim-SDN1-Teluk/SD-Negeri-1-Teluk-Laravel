<?php

namespace App\Http\Controllers\Admin\ContentManagement\Galeri;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContentManagement\Galeri\GaleriVideo;

class GaleriVideoController extends Controller
{
    public function index()
    {
        $data = GaleriVideo::where('active',1)->get();
        return view('admin.galeri.galerivideo.index',compact('data'));
    }

    public function add()
    {
        return view('admin.galeri.galerivideo.add');
    }

    public function post(Request $request)
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

            $file = new GaleriVideo();
            $file->title=$request->title;
            $file->content=$request->content;
            $file->img = json_encode($data);
            $file->active = 1;
            $file->save();
        }else{
            $data = GaleriVideo::create([
                'title' => $request->pesan,
                'content' => $request->priority,
                'active' => 1
            ]);
        }

        return redirect()->route('adm.galerivideo')
                        ->with('success','Berhasil Tambah Data');

    }

    public function edit($id)
    {
        $data = GaleriVideo::findorfail($id);
        return view('admin.galeri.galerivideo.edit',compact('data'));
       
                        
    }
    
    public function update(Request $request, $id)
    {
    
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
            $file = GaleriVideo::where('id',$request->id)->first();
            $file->title=$request->title;
            $file->content=$request->content;
            $file->active = 1;
            $file->img = json_encode($data);
            $file->save();
        }else{
            $galerivideo = GaleriVideo::where('id',$request->id)->first();
            $galerivideo->title=$request->title;
            $galerivideo->content=$request->content;
            $galerivideo->active = 1;
            $galerivideo->img = $request->gambar;
            $galerivideo->update();
        }
        
        return redirect()->route('adm.galerivideo')
                        ->with('success','Berhasil Tambah Data');
    }
    
    public function destroy($id)
    {
        $data = GaleriVideo::findorfail($id);
        $data->delete();
        return back();
    }
}
