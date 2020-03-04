@extends('layouts.layout')
@section('judul','Data of Salary')

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
            Tambah Data gaji
         </button>
        </div>
        
        <table class="table table-hover">
                <tr>
                    <th>pegawai</th>
                    <th>gaji_kotor</th>
                    <th>waktu_gaji</th>
                    <th>nominal_pajak</th>
                    <th>nominal_tunjangan</th>
                    <th>nominal_potongan</th>
                    <th>gaji_bersih</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach($data_gaji as $gaji)
                <tr>
                        <td>{{$gaji->pegawai->nama_pegawai}}</td>
                        <td>{{$gaji->pegawai->gaji_pokok}}</td>
                        <td>{{$gaji->waktu_gaji}}</td>
                        <td>{{$gaji->nominal_pajak }}</td>
                        <td>{{$gaji->nominal_tunjangan}}</td>
                        <td>{{$gaji->nominal_potongan}}</td>
                        <td>{{$gaji->pegawai->gaji_pokok - $gaji->nominal_potongan - $gaji->nominal_pajak + $gaji->nominal_tunjangan}}</td>
                <td><a href="/editgaji/{{$gaji->id}}" class="btn btn-warning btn-sm">Edit</a></td>
                <td><a href="/deletegaji/{{$gaji->id}}" class="btn btn-warning btn-sm">Delete</a></td>
                </tr>
                @endforeach
            </table>
    </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
  <h5 class="modal-title" id="exampleModalLabel">Tambah Data gaji</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<div class="modal-body">
    <form action="/gaji/create" method="POST">
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
        <label for="exampleInputEmail1">waktu</label>
        <input name="waktu_gaji"type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">nominal pajak</label>
        <input name="nominal_pajak"type="int" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama">
      </div>
       <div class="form-group">
          <label for="exampleInputEmail1">nominal potongan</label>
          <input name="nominal_potongan"type="int" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama">
       </div>
       <div class="form-group">
          <label for="exampleInputEmail1">nominal tunjungan</label>
          <input name="nominal_tunjangan"type="int" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama">
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
