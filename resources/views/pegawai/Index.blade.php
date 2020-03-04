@extends('layouts.layout')
@section('judul','Data of employees')

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
            Tambah Data
         </button>
        </div>
        
        <table class="table table-hover">
                <tr>
                    <th>id_pegawai</th>
                    <th>nama_pegawai</th>
                    <th>jenis_kelamin</th>
                    <th>tgl_lahir</th>
                    <th>alamat</th>
                    <th>gaji_pokok</th>
                    <th> Tanggal masuk</th>
                    <th>Alamat</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach($data_pegawai as $data_pegawai)
                <tr>
                        <td>{{$data_pegawai->id}}</td>
                        <td>{{$data_pegawai->nama_pegawai}}</td>
                        <td>{{$data_pegawai->jenis_kelamin}}</td>
                        <td>{{$data_pegawai->tgl_lahir}}</td>
                        <td>{{$data_pegawai->alamat}}</td>
                        <td>{{$data_pegawai->gaji_pokok}}</td>
                        <td>{{$data_pegawai->tanggal_masuk}}</td>
                <td><a href="/editpegawai/{{$data_pegawai->id}}" class="btn btn-warning btn-sm">Edit</a></td>
                <td><a href="/deletepegawai/{{$data_pegawai->id}}" class="btn btn-warning btn-sm">Delete</a></td>
                </tr>
                @endforeach
            </table>
    </div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
  <h5 class="modal-title" id="exampleModalLabel">Tambah Data Employee</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
        <form action="/pegawai/create" method="POST">
          {{csrf_field()}}
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Pegawai</label>
            <input name="nama_pegawai"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang">
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
            <input name="tgl_lahir"type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama">
          </div>
           <div class="form-group">
              <label for="exampleInputEmail1">gaji pokok</label>
              <input name="gaji_pokok"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama">
           </div>
            <div class="form-group">
              <label for="exampleInputEmail1">tanggal masuk</label>
              <input name="tanggal_masuk"type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama">
            </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Alamat</label>
            <textarea name="alamat"class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
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
