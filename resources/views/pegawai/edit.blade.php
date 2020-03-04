@extends('layouts.layout')
@section('judul',' Edit Data Pegawai')

@section('content')

<div class="container">
  @if(session('sukses'))
      <div class="alert alert-success" role="alert">
       {{session('sukses')}}
      </div>
  @endif
    <div class="row">
    <form action="{{route('proseseditpegawai',['id'=> $data_pegawai->id])}}" method="GET">
        {{csrf_field()}}
     <div class="form-group">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Pegawai</label>
                <input name="nama_pegawai"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama pegawai" value="{{$data_pegawai->nama_pegawai}}">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                  <select name="jenis_kelamin"class="form-control" id="exampleFormControlSelect1">
                    <option value="L">Laki - Laki</option>
                    <option value="P">Perempuan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">tanggal lahir</label>
                <input name="tgl_lahir"type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal lahir" value="{{$data_pegawai->tg_lahir}}">
                </div>
                 <div class="form-group">
                    <label for="exampleInputEmail1">gaji pokok</label>
                 <input name="gaji_pokok"type="Int" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Gaji pokok" value="{{$data_pegawai->gaji_pokok}}">
                 </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">tanggal masuk</label>
                  <input name="tanggal_masuk"type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama"value="{{$data_pegawai->tanggal_masuk}}">
                  </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Alamat</label>
                  <input name="alamat"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama"value="{{$data_pegawai->alamat}}">
                </div>
     <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

@endsection

