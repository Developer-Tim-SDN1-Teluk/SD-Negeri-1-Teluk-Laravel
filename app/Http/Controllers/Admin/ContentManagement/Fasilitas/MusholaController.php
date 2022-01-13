<?php

namespace App\Http\Controllers\Admin\ContentManagement\Fasilitas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContentManagement\Fasilitas\Mushola;

class MusholaController extends Controller
{
    public function userview()
    {
        $data = Mushola::where('active',1)->first();
        return view('fasilitas.mushola',compact('data'));
    }

    public function index()
    {
        $data = Mushola::where('active',1)->get();
        return view('admin.fasilitas.mushola.index',compact('data'));
    }

    public function add()
    {
        return view('admin.fasilitas.mushola.add');
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

            $file = new Mushola();
            $file->title=$request->title;
            $file->content=$request->content;
            $file->img = json_encode($data);
            $file->active = 1;
            $file->save();
        }else{
            $mushola = Mushola::create([
                'title' => $request->pesan,
                'content' => $request->priority,
                'active' => 1
            ]);
        }

        return redirect()->route('adm.mushola')
                        ->with('success','Berhasil Tambah Data');

    }
    public function edit($id)
    {
        $mushola = Mushola::findorfail($id);
        return view('admin.fasilitas.mushola.edit',compact('mushola'));
       
                        
    }

    public function update(Request $request, $id)
    {
        // $sambutan = Sambutan::findorfail($id);
        // $sambutan->update($request->all());
        // // // $ruangguru = RuangGuru::find($id);
        // // $input = $request->all();
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
            $file = Mushola::where('id',$request->id)->first();
            $file->title=$request->title;
            $file->content=$request->content;
            $file->active = 1;
            $file->img = json_encode($data);
            $file->save();
        }else{
            $ruangguru = Mushola::where('id',$request->id)->first();
            $ruangguru->title=$request->title;
            $ruangguru->content=$request->content;
            $ruangguru->active = 1;
            $ruangguru->img = $request->gambar;
            $ruangguru->update();
        }
        
        return redirect()->route('adm.mushola')
                        ->with('success','Berhasil Tambah Data');
    }
    public function destroy($id)
    {
        $mushola = Mushola::findorfail($id);
        $mushola->delete();
        return back();
    }

    
}
