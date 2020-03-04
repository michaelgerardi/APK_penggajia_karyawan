<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\gaji;
use App\create_pegawai;

class GajiController extends Controller
{
    public function Index(){
        $data_gaji = gaji::all();
        $data_pegawai = create_pegawai::all();
        return view('gaji.Index',compact('data_gaji', 'data_pegawai'));
    }

    public function create(Request $request){
        gaji::create($request->all());
        return redirect('gaji')->with('sukses','data berhasil ditambakan');
    }
    public function vedit($id){
        $data_gaji = gaji::find($id);
        $data = [
            'title' => 'gaji',
            'data_gaji' => $data_gaji
        ];
        return view('gaji.edit',$data);
    }
    public function editgaji($id, Request $request){
        $data = gaji::find($id);
        $data->waktu_gaji= $request->input('waktu_gaji');
        $data->nominal_pajak = $request->input('nominal_pajak');
        $data->nominal_tunjangan = $request->input('nominal_tunjangan');
        $data->nominal_potongan = $request->input('nominal_potongan');
        $data->save();
        return redirect()->route('indexgaji');
    }

    public function deletegaji($id){
        $data = gaji::find($id);
        $data->delete();
        return redirect()->back();

    }
}
