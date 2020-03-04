@extends('layouts.layout')
@section('judul','Laporan Penggajian Karyawan')

@section('content')
<table class="table table-hover">
    <tr>
        <th>pegawai</th>
        <th>gaji_kotor</th>
        <th>waktu_gaji</th>
        <th>nominal_pajak</th>
        <th>nominal_tunjangan</th>
        <th>nominal_potongan</th>
        <th>gaji_bersih</th>
    </tr>
    @foreach($data as $gaji)
    <tr>
            <td>{{$gaji->pegawai->nama_pegawai}}</td>
            <td>{{$gaji->pegawai->gaji_pokok}}</td>
            <td>{{$gaji->waktu_gaji}}</td>
            <td>{{$gaji->nominal_pajak}}</td>
            <td>{{$gaji->nominal_tunjangan}}</td>
            <td>{{$gaji->nominal_potongan}}</td>
            <td>{{$gaji->pegawai->gaji_pokok - $gaji->nominal_potongan - $gaji->nominal_pajak + $gaji->nominal_tunjangan}}</td>
    </tr>
    @endforeach
</table>
@endsection

