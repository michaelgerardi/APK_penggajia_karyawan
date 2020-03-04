<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kehadiran;
use App\create_pegawai;

class KehadiranController extends Controller
{
    public function Index(){
        $data_kehadiran = Kehadiran::all();
        $data_pegawai = create_pegawai::all();
        return view('kehadiran.Index',compact('data_kehadiran', 'data_pegawai'));
    }

    public function create(Request $request){
        \App\Kehadiran::create($request->all());
        return redirect('kehadiran')->with('sukses','data berhasil ditambakan');
    }

    public function vedit($id){
        $data_kehadiran = Kehadiran::find($id);
        $data = [
            'title' => 'kehadiran',
            'data_kehadiran' => $data_kehadiran
        ];
        return view('kehadiran.edit',$data);
    }

    public function editkehadiran($id, Request $request){
        $data = Kehadiran::find($id);
        $data->tanggal_kehadiran = $request->input('tanggal_kehadiran');
        $data->waktu_masuk= $request->input('waktu_masuk');
        $data->waktu_keluar=$request->input('waktu_keluar');
        $data->save();
        return redirect()->route('indexkehadiran');
    }

    public function deletekehadiran($id){
        $data = Kehadiran::find($id);
        $data->delete();
        return redirect()->back();

    }
}
