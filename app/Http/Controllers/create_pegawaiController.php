<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\create_pegawai;
use Illuminate\Support\Facades\DB;

class create_pegawaiController extends Controller
{
    public function Index(){
        $data_pegawai = create_pegawai::all();
        return view('pegawai.Index',compact('data_pegawai'));
    }
    
    public function create(Request $request){
        \App\create_pegawai::create($request->all());
        return redirect('pegawai')->with('sukses','data berhasil ditambakan');
    }

    public function vedit($id){
        $data_pegawai = create_pegawai::find($id);
        $data = [
            'title' => 'Pegawai',
            'data_pegawai' => $data_pegawai
        ];
        return view('pegawai.edit',$data);
    }

    public function editpegawai($id, Request $request){
        $data = create_pegawai::find($id);
        $data->nama_pegawai= $request->input('nama_pegawai');
        $data->jenis_kelamin = $request->input('jenis_kelamin');
        $data->tgl_lahir = $request->input('tgl_lahir');
        $data->gaji_pokok = $request->input('gaji_pokok');
        $data->tanggal_masuk = $request->input('tanggal_masuk');
        $data->save();
        return redirect()->route('indexpegawai');
        }
    
    public function delete($id){
        $data = create_pegawai::find($id);
        $data->delete();
        return redirect()->back();

    }
    private function getname()
    {
        //
    }
}

