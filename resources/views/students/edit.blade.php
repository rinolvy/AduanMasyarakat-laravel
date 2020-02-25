@extends('layout.main')

@section('title', 'Form Ubah Data mahasiswa')

@section('container')

</nav>
<div class="container">
<div class="row">
<div class="col-8">
    <h1 class="mt-3">Form Ubah Data mahasiswaa</h1>

    <form method="post" action="/students/{{$student->id}}">
      @method('patch')
        @csrf
        <div class="form-group">
          <label for="nama">NAMA</label>
          <input type="text" class="form-control @error('nama') is-invalid @enderror " id="nama" placeholder="Masukan Nama" name="nama" value="{{$student->nama}}">
          @error('nama')
        <div class="invalid-feedback">{{$message}}</div>    
        @enderror
        </div>
    <form method="post" action="/students/create">
        <div class="form-group">
          <label for="nrp">NRP</label>
          <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" placeholder="Masukan NRP" name="nrp" value="{{$student->nrp}}">@error('nrp')
          <div class="invalid-feedback">{{$message}}</div>
          @enderror
        </div>
    <form method="post" action="/students/create">
        <div class="form-group">
          <label for="email">EMAIL</label>
          <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="email" placeholder="Masukan Email" name="email" value="{{$student->email}}">@error('email')
        </div>
        @enderror
    <form method="post" action="/students/create">
        <div class="form-group">
          <label for="jurusan">JURUSAN</label>
          <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="jurusan" placeholder="Masukan Jurusan" name="jurusan" value="{{$student->jurusan}}">@error('jurusan')
        </div>
        @enderror
        <button type="submit" class="btn btn-primary mt-3">Ubah data</button>
      </form>

</div>
</div>
</div>
@endsection
