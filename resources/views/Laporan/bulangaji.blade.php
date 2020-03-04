@extends('layouts.layout')
@section('judul','Data Cari Gaji')

@section('content')
<form action="/Laporan/gaji" method="POST">
    {{csrf_field()}}
    <div class="form-group">
            <label for="exampleInputbulan">Pencarian Bulan :</label>
            <select name="waktu_gaji" id="exampleInputbulan">
                <option value="01">Januari</option>
                <option value="02">Februari</option>
                <option value="03">Maret</option>
                <option value="04">April</option>
                <option value="05">Mei</option>
                <option value="06">Juni</option>
                <option value="07">Juli</option>
                <option value="08">Agustus</option>
                <option value="09">September</option>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12">Desember</option>
            </select>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
</form>
@endsection
