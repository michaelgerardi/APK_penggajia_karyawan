<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gaji;
use App\create_pegawai;
use App\Kehadiran;
use App\Bukubesar;
class LaporanController extends Controller
{
    public function LaporanGaji(Request $req){
        $data_pegawai = create_pegawai::all();
        $data = Gaji::whereMonth('waktu_gaji','=',$req->input('waktu_gaji'))->get();
        return view('/Laporan/gaji',compact('data', 'data_pegawai'));
    }

    public function vLaporangaji(){
        return view('/Laporan/bulangaji');
    }

    public function Laporankehadiran(Request $req){
        $data_pegawai = create_pegawai::all();
        $data = Kehadiran::whereMonth('tanggal_kehadiran','=',$req->input('tanggal_kehadiran'))->get();
        return view('/Laporan/kehadiran',compact('data', 'data_pegawai'));
    }
    public function vLaporankehadiran(){
        return view('/Laporan/bulanabsen');
    }
    public function Laporanbb(Request $req){
        $data = Bukubesar::all();
        $data_debit= $data->sum('gaji_bersih');
        return view('/Laporan/Bukubesar',compact('data','data_debit'));
    }
}
