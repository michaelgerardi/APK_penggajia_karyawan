@extends('layouts.layout')
@section('judul','Laporan Jurnal Umum')

@section('content')

<table class="table table-hover">
    <tr>
        <th>tanggal</th>
        <th>keterangan</th>
        <th>ref</th>
        <th>Debet</th>
        <th>credit</th>
    </tr>
    <tr>
        <td>2019-01-01</td>
        <td>Kas</td>
        <td></td>
        <td></td>
        <td>{{$data_debit}}</td>
    </tr>
    @foreach($data as $bb)
    <tr>
            <td>{{$bb->waktu_gaji}}</td>
            <td>Pembayaran Gaji</td>
            <td></td>
            <td>{{$bb->gaji_bersih}}</td>
            <td></td>
    </tr>
    @endforeach
    
    <tr>
            <td></td>
            <td>Total </td>
            <td></td>
            <td>{{$data_debit}}</td>
            <td>{{$data_debit}}</td>
        </tr>
</table>
@endsection

