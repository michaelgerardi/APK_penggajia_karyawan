@extends('layouts.layout')
@section('judul','Laporan Kehadiran Karyawan')

@section('content')
<table class="table table-hover">
    <tr>
        <th>pegawai</th>
        {{-- <th>pangkat</th> --}}
        <th>tanggal hadir</th>
        <th>waktu masuk kerja</th>
        <th>waktu keluar kerja</th>
    </tr>
    @foreach($data as $kehadiran)
    <tr>
            <td>{{$kehadiran->pegawai->nama_pegawai}}</td>
            {{-- <td>{{$kehadiran->pangkat->nama_pangkat}}</td> --}}
            <td>{{$kehadiran->tanggal_kehadiran}}</td>
            <td>{{$kehadiran->waktu_masuk}}</td>
            <td>{{$kehadiran->waktu_keluar}}</td>
     </tr>
    @endforeach
</table>
@endsection

