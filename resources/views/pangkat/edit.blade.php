@extends('layouts.layout')
@section('judul',' Edit Data Pangkat')

@section('content')
<div class="container">
  @if(session('sukses'))
      <div class="alert alert-success" role="alert">
       {{session('sukses')}}
      </div>
  @endif
    <div class="row">
    <form action="{{route('proseseditpangkat',['id'=> $data_pangkat->id])}}" method="GET">
        {{csrf_field()}}
     <div class="form-group">
                <div class="form-group">
                  <label for="exampleInputEmail1">nama pangkat</label>
                <input name="nama_pangkat"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="waktu gaji" value="{{$data_pangkat->nama_pangkat}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">gaji minimum</label>
                <input name="gaji_minimun"type="int" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nominal" value="{{$data_pangkat->gaji_minimun}}">
                </div>
                 <div class="form-group">
                    <label for="exampleInputEmail1">gaji maksimum</label>
                 <input name="gaji_maksimum"type="Int" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nominal" value="{{$data_pangkat->gaji_maksimum}}">
                 </div>
     <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

@endsection
