@extends('poling.layout')
@section('title', 'Poling')
@section('container')
    <nav class="navbar navbar-expand-lg navbar-light back-navbar">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('img_poling/kelas_logo.png') }}" width="154px" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto" id="navbar-kategori">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-expanded="false">
                        Kategori
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Prakerja</a>
                </li>
                <li class="nav-item" style="margin-left: 12px">
                    <a class="nav-link" href="#">Kelas Saya</a>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto" id="navbar-auth">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control search" type="search" placeholder="Search" aria-label="Search">
                </form>
                <div class="pull-right" id="bell">
                    <i class="fa fa-bell-o fa-3px bell" aria-hidden="true"></i>
                </div>
                <div class="pull-right pt-1">
                    <img src="{{ asset('img_poling/user.png') }}" width="50px" alt="">
                </div>
                <div class="pull-right" id="user">
                    <ul class="nav pull-right">
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, User
                                <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="/user/preferences"><i class="icon-cog"></i> Preferences</a></li>
                                <li><a href="/help/support"><i class="icon-envelope"></i> Contact Support</a></li>
                                <li class="divider"></li>
                                <li><a href="/auth/logout"><i class="icon-off"></i> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </ul>
        </div>
    </nav>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="text-judul">
                        <span id="judul">
                            Chapter 1 : Apa Pendapatmu?
                        </span>
                    </div>
                    <div class="text-isi">
                        <span id="isi">
                            Tahun -tahun ini menjadi era yang sangat berat bagi kita semua,
                            banyak industri yang terdampak salah satunya industri Wedding ini,
                            nah menurutmu hal apa yang perlu diprioritaskan oleh Wedding Organizer di masa pandemik ini?
                        </span>
                    </div>
                    <div class="row mt-5">
                        <div class="col-6">
                            <div class="progress" id="progress-satu">
                                <label for="progress-loadSatu" id="label1">Fokus Ke Acara Pernikahan Online</label>
                                <div class="progress-bar" id="progress-loadSatu" role="progressbar" aria-valuenow="0"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <label for="progress-loadSatu" id="label2">10%</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="progress" id="progress-dua">
                                <label for="progress-loadSatu" id="label1">Menawarkan Hybrid Wedding</label>
                                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                    aria-valuemax="100">
                                    <label for="progress-loadSatu" id="label2">10%</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mt-5">
                            <div class="progress" id="progress-tiga">
                                <label for="progress-loadSatu" id="label1">Tunggu PPKM selesai </label>
                                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                    aria-valuemax="100">
                                    <label for="progress-loadSatu" id="label2">10%</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mt-5">
                            <div class="progress" id="progress-empat">
                                <label for="progress-loadSatu" id="label1">Pindah Kota yang PPKM-nya tidak
                                    ketat</label>
                                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                    aria-valuemax="100">

                                    <label for="progress-loadSatu" id="label2">10%</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mt-5">
                            <div class="progress" id="progress-lima">
                                <label for="progress-loadSatu" id="label1">Buat bisnis baru</label>
                                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                    aria-valuemax="100">
                                    <label for="progress-loadSatu" id="label2">10%</label>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-4 pl-5">
                    <div class="card" id="pre-judul">
                        <div class="card-header">
                            <div class="row" style="background-color: transparent">
                                <div class="col-6" style="background-color: transparent">
                                    <span id="text-pre">
                                        Pre-test
                                    </span>
                                </div>
                                <div class="col-6" style="background-color: transparent; padding-left:35%">
                                    <img src="{{ asset('img_poling/Vector.png') }}" width="20px" height="10px"
                                        alt="vektor-1" style="background-color: transparent">
                                </div>
                            </div>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item" style="background-color:#121A1F ">
                                <div class="row" style="background-color: transparent">
                                    <div class="col-2" style="background-color: transparent;">
                                        <img src="{{ asset('img_poling/pre-test.png') }}" alt="pre-test">
                                    </div>
                                    <div class="col-10" style="background-color: transparent;padding:2px">
                                        <span id="span-1">
                                            Akses Pre-test
                                        </span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="card-header">
                            <div class="row" style="background-color: transparent">
                                <div class="col-6" style="background-color: transparent">
                                    <span id="text-pre">
                                        Pre-test
                                    </span>
                                </div>
                                <div class="col-6" style="background-color: transparent; padding-left:35%">
                                    <img src="{{ asset('img_poling/Vector.png') }}" width="20px" height="10px"
                                        alt="vektor-1" style="background-color: transparent">
                                </div>
                            </div>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item" style="background-color:#121A1F ">
                                <div class="row" style="background-color: transparent">
                                    <div class="col-2" style="background-color: transparent;">
                                        <img src="{{ asset('img_poling/play.png') }}" alt="pre-test">
                                    </div>
                                    <div class="col-10" style="background-color: transparent;padding:2px">
                                        <span id="span-1">
                                            Perkenalan
                                        </span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="card-header">
                            <div class="row" style="background-color: transparent">
                                <div class="col-6" style="background-color: transparent">
                                    <span id="text-pre">
                                        Pre-test
                                    </span>
                                </div>
                                <div class="col-6" style="background-color: transparent; padding-left:35%">
                                    <img src="{{ asset('img_poling/Vector.png') }}" width="20px" height="10px"
                                        alt="vektor-1" style="background-color: transparent">
                                </div>
                            </div>
                        </div>
                        <div class="card-header">
                            <div class="row" style="background-color: transparent">
                                <div class="col-6" style="background-color: transparent">
                                    <span id="text-pre">
                                        Pre-test
                                    </span>
                                </div>
                                <div class="col-6" style="background-color: transparent; padding-left:35%">
                                    <img src="{{ asset('img_poling/Vector.png') }}" width="20px" height="10px"
                                        alt="vektor-1" style="background-color: transparent">
                                </div>
                            </div>
                        </div>
                        <div class="card-header">
                            <div class="row" style="background-color: transparent">
                                <div class="col-6" style="background-color: transparent">
                                    <span id="text-pre">
                                        Pre-test
                                    </span>
                                </div>
                                <div class="col-6" style="background-color: transparent; padding-left:35%">
                                    <img src="{{ asset('img_poling/Vector.png') }}" width="20px" height="10px"
                                        alt="vektor-1" style="background-color: transparent">
                                </div>
                            </div>
                        </div>
                        <div class="card-header">
                            <div class="row" style="background-color: transparent">
                                <div class="col-6" style="background-color: transparent">
                                    <span id="text-pre">
                                        Pre-test
                                    </span>
                                </div>
                                <div class="col-6" style="background-color: transparent; padding-left:35%">
                                    <img src="{{ asset('img_poling/Vector.png') }}" width="20px" height="10px"
                                        alt="vektor-1" style="background-color: transparent">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
