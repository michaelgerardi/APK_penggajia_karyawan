<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\create_pangkat;
use App\create_pegawai;

class create_pangkatController extends Controller
{
    public function Index(){
        $data_pangkat = create_pangkat::all();
        $data_pegawai = create_pegawai::all();
        return view('pangkat.Index',compact('data_pangkat','data_pegawai'));
    }

    public function create(Request $request){
        \App\create_pangkat::create($request->all());
        return redirect('pangkat')->with('sukses','data berhasil ditambakan');
    }
    public function vedit($id){
        $data_pangkat = create_pangkat::find($id);
        $data = [
            'title' => 'pangkat',
            'data_pangkat' => $data_pangkat
        ];
        return view('pangkat.edit',$data);
    }
    public function editpangkat($id, Request $request){
        $data = create_pangkat::find($id);
        $data->nama_pangkat= $request->input('nama_pangkat');
        $data->gaji_minimun = $request->input('gaji_minimun');
        $data->gaji_maksimum = $request->input('gaji_maksimum');
        $data->save();
        return redirect()->route('indexpangkat');
    }

    public function deletepangkat($id){
        $data = create_pangkat::find($id);
        $data->delete();
        return redirect()->back();

    }
}
