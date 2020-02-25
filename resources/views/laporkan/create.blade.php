@extends('layout.mainhome')
@section('title','LaporkanSekarang')

@section('content')

<div class="container ">
    <div class="row">
        <div class="col-md-3 ">
            <div class="card ">
                <div class="card-content">
                    <div class="media mt-2">
                        <div class="media-content">
                            <div class="title is-4">Nama: {{ Auth::user()->name }}</div>
                        </div>
                    </div>
                    <div class="content">
                        <b> Deskripsi </b> : Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                        <a href="#">#css</a> <a href="#">#responsive</a>
                        <br>
                        Status: Admin
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9 ">
            <div class="card">
                <div class="card-content">
                    <div class="field">
                    <form action="{{url('/resultreport')}}" method="POST">
                            {{csrf_field()}}
                            <label class="label">Id Pengaduan</label>
                            <div class="control">

                                <div class="input-group-prepend">
                                    <span class="input-group-text form-control" id="basic-addon3">{{ Auth::user()->id }}</span>
                                  </div>
                                <span  class="form-text text-muted">note: Simpan id anda untuk aktifasi pengaduan</span>
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Nama Lengkap</label>
                            <div class="control has-icons-left has-icons-right">
                                <input class="input @error('namalengkap') is-invalid @enderror" name="namalengkap" id="namalengkap" type="text"  placeholder="Namalengkap" value="{{old('namalengkap')}}">
                            <span class="icon is-small is-left">
                                <i class="fas fa-user"></i>
                            </span>
                            @error('namalengkap')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        </div>
                    </div>


                        <div class="field">
                            <label class="label">Tanggal Pengaduan</label>
                            <div class="control has-icons-left has-icons-right">
                                <input class="input @error('tanggal') is-invalid @enderror"  type="text" value="{{old('tanggal')}}" name="tanggal" id="tanggal" disabled placeholder=" {{date('Y-m-d')}}">
                            <span class="icon is-small is-left" >
                                    <i class="fas fa-calendar-alt"></i>
                                </span>
                                @error('tanggal')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">NIK</label>
                            <div class="control has-icons-left has-icons-right">
                                <input class="input @error('nik') is-invalid @enderror" name="nik" id="nik" type="text"  placeholder="NIK" value="{{old('nik')}}">
                            <span class="icon is-small is-left">
                                <i class="fas fa-id-card"></i>
                            </span>
                            @error('nik')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Isi Laporan</label>
                        <div class="control">
                            <textarea class="textarea @error('isilaporan') is-invalid @enderror" name="isilaporan" id="isilaporan" value="{{old('isilaporan')}}" placeholder="Masukan Laporan Anda"></textarea>
                            @error('isilaporan')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        </div>
                    </div>
                        <div class="justify-content-center">
                            <button type="submit" class="btn btn-outline-primary float-left">Submit</button>
                        </div>
                        </form>
                </div>
            </div>
        </div>

    </div>
</div>


@endsection
