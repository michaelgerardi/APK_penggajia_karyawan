<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\create_pensiun;
use App\create_pegawai;

class create_pensiunController extends Controller
{
    public function Index(){
        $data_pensiun = create_pensiun::all();
        $data_pegawai = create_pegawai::all();
        return view('pensiun.Index',compact('data_pegawai','data_pensiun'));
    }

    public function create(Request $request){
        \App\create_pensiun::create($request->all());
        return redirect('pensiun')->with('sukses','data berhasil ditambakan');
    
    }

    public function vedit($id){
        $data_pensiun = create_pensiun::find($id);
        $data = [
            'title' => 'Pensiun',
            'data_pensiun' => $data_pensiun
        ];
        return view('pensiun.edit',$data);
    }

    public function editpensiun($id, Request $request){
        $data = create_pensiun::find($id);
        $data->nama_pensiun= $request->input('nama_pensiun');
        $data->waktu_pensiun = $request->input('waktu_pensiun');
        $data->save();
        return redirect()->route('indexpensiun');
    }

    public function deletepenisun($id){
        $data = create_pensiun::find($id);
        $data->delete();
        return redirect()->back();

    }

}
