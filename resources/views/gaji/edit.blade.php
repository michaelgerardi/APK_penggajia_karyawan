@extends('layouts.layout')
@section('judul',' Edit Data Gaji')

@section('content')
<div class="container">
  @if(session('sukses'))
      <div class="alert alert-success" role="alert">
       {{session('sukses')}}
      </div>
  @endif
    <div class="row">
    <form action="{{route('proseseditgaji',['id'=> $data_gaji->id])}}" method="GET">
        {{csrf_field()}}
     <div class="form-group">
                <div class="form-group">
                  <label for="exampleInputEmail1">waktu gaji</label>
                <input name="waktu_gaji"type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="waktu gaji" value="{{$data_gaji->waktu_gaji}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">nominal pajak</label>
                <input name="nominal_pajak"type="int" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nominal" value="{{$data_gaji->nominal_pajak}}">
                </div>
                 <div class="form-group">
                    <label for="exampleInputEmail1">nominal tunjangan</label>
                 <input name="nominal_tunjangan"type="Int" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nominal" value="{{$data_gaji->nominal_tunjangan}}">
                 </div>
                 <div class="form-group">
                        <label for="exampleInputEmail1">nominal potongan</label>
                     <input name="nominal_potongan"type="Int" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nominal" value="{{$data_gaji->nominal_potongan}}">
                     </div>
     <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

@endsection
