@extends('layout.mainhome')
@section('title','AduanMasyarakat')
@section('content')
            @if (session('status'))
            <div class="notification is-info">
                <button class="delete"></button>
                {{ session('status') }}
            </div>
        </div>

        {{$report}}

        @endif

        <div class="text-center mt-5">
            <div class="container">
                <div class="row">
                        <h3 style="font-family: 'Montserrat';">Berikut adalah panduan untuk mengaktifkan idpengaduan, jika anda tidak mengatifkan idpengaduan maka laporan anda mungkin akan tidak kami proses </h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row ml-5">
                <div class="col-md-4">
                    <img src="images/idea.svg" class="img-fluid mt-5" style="margin-left: 100px;" width="150" alt="ide">
                    <h6 class="text-center mt-1"><strong>1.Temukan masalah/keluhan terlebih dahulu</strong></h6>
                </div>
                <div class="col-md-4">
                    <img src="images/contract.svg" class="img-fluid mt-5" style="margin-left: 100px;" width="150" alt="">
                <h6 class="text-center mt-1"><strong>2.Secepatnya laporkan masalah anda <a href="{{url('/laporkansekarang')}}" class="text-decoration-none">Klik Disini untuk melapor</a></strong></h6>
                </div>
                <div class="col">
                    <img src="images/done.svg" class="img-fluid mt-5" style="margin-left: 100px;" width="150" alt="">
                    <h6 class="text-center mt-1"><strong>3.Silahkan Tunggu laporan anda, dan aktifasi idpengaduan anda di bawah ya</strong></h6>
                </div>
            </div>
        </div>
        <div class="jumbotron" style="margin: auto; background: #d1ecf1;">
        <div class="container">
            <div class="row">
                        <div class="text-center">
                            <h4>Anda punya <b> Id Pengaduan?</b></h4>

                                <p>Jika anda memiliki idpelanggan yang didapatkan dari melapor masalah terlebih dahulu, Anda dapat melakukan aktivasi dengan memasukan idpelanggan tersebut pada kolom dibawah.</p>
                                <div class="field has-addons">
                                    <div class="control">
                                      <input class="input" type="text" placeholder="Masukan Id Pengaduan" style="width: 150vh; margin-left: 50px;">
                                    </div>
                                    <div class="control">
                                      <a class="button is-info">
                                        Aktifkan Id Pengaduan
                                      </a>
                                    </div>
                                  </div>
                            </div>
                    </div>
            </div>
        </div>
        <footer>
            <p>hello</p>
        </footer>
@endsection

