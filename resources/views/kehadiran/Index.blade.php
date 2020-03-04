@extends('layouts.layout')
@section('judul','Data of attendance')

@section('content')
<div class="container">
  @if(session('sukses'))
      <div class="alert alert-success" role="alert">
       {{session('sukses')}}
      </div>
  @endif
    <div class="row">
        <div class="col-6">
        </div>
        <div class="col-6">
             <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
            Data Kehadiran pegawai
         </button>
        </div>
        
        <table class="table table-hover">
                <tr>
                    <th>pegawai</th>
                    <th>tanggal kehadiran</th>
                    <th>waktu masuk</th>
                    <th>waktu keluar</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach($data_kehadiran as $kehadiran)
                <tr>
                        <td>{{$kehadiran->pegawai->nama_pegawai}}</td>
                        <td>{{$kehadiran->tanggal_kehadiran}}</td>
                        <td>{{$kehadiran->waktu_masuk}}</td>
                        <td>{{$kehadiran->waktu_keluar}}</td>
                <td><a href="/editkehadiran/{{$kehadiran->id}}" class="btn btn-warning btn-sm">Edit</a></td>
                <td><a href="/deletekehadiran/{{$kehadiran->id}}" class="btn btn-warning btn-sm">Delete</a></td>
                </tr>
                @endforeach
            </table>
    </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
  <h5 class="modal-title" id="exampleModalLabel">Tambah Data kehadiran</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
    <form action="/kehadiran/create" method="POST">
      {{csrf_field()}}
      <div class="form-group">
        <label for="exampleInputPegawai">Pegawai</label>
        <select name="pegawai_id" id="exampleInputPegawai">
          @foreach ($data_pegawai as $pegawai)
            <option value={{$pegawai->id}}>{{$pegawai->nama_pegawai}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">tanggal kehadiran</label>
      <input name="tanggal_kehadiran"type="date" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" placeholder="Nama Belakang">
      </div>
      <div class="form-group">
         <label for="exampleInputEmail1">waktu masuk</label>
        <input name="waktu_masuk"type="time" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" placeholder="Nama Belakang">
      </div>
        <div class="form-group">
         <label for="exampleInputEmail1">waktu keluar</label>
         <input name="waktu_keluar"type="time" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" placeholder="Nama Belakang">
        </div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

@endsection

