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
            <ul class="navbar-nav" id="navbar-kategori">
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
                <li class="nav-item pl-3">
                    <a class="nav-link" href="#">Prakerja</a>
                </li>
                <li class="nav-item pl-3">
                    <a class="nav-link" href="#">Kelas Saya</a>
                </li>
            </ul>
        </div>
        @include('poling.poling_user')
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
                    <form id="form-poling">
                        @csrf
                        <div class="row mt-5">
                            <div class="col-6" id="cek" onclick="move()">
                                <div class="progress" id="progress-satu">
                                    <label for="progress-loadSatu" id="label1">Fokus Ke Acara Pernikahan Online</label>
                                    <div class="progress-bar" id="progress-loadSatu" role="progressbar"></div>
                                    <label for="progress-loadSatu" id="label2"></label>
                                    <input type="text" value="Fokus Ke Acara Pernikahan Online" name="bar_one" hidden>
                                </div>
                            </div>
                            <div class="col-6" id="cek1">
                                <div class="progress" id="progress-dua" onclick="move1()">
                                    <label for="progress-loadDua" id="label1">Menawarkan Hybrid Wedding</label>
                                    <div class="progress-bar" id="progress-loadDua" role="progressbar" aria-valuenow="0"
                                        aria-valuemin="0" aria-valuemax="100" name="bar_two">
                                    </div>
                                    <label for="progress-loadSatu" id="label2_1"></label>
                                </div>
                            </div>
                            <div class="col-6 mt-5" id="cek2">
                                <div class="progress" id="progress-tiga" onclick="move2()">
                                    <label for="progress-loadTiga" id="label1">Tunggu PPKM selesai </label>
                                    <div class="progress-bar" id="progress-loadTiga" role="progressbar" aria-valuenow="0"
                                        aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <label for="progress-loadSatu" id="label2_2"></label>
                                </div>
                            </div>
                            <div class="col-6 mt-5" id="cek3">
                                <div class="progress" id="progress-empat" onclick="move3()">
                                    <label for="progress-loadEmpat" id="label1">Pindah Kota yang PPKM-nya tidak
                                        ketat</label>
                                    <div class="progress-bar" id="progress-loadEmpat" role="progressbar" aria-valuenow="0"
                                        aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <label for="progress-loadSatu" id="label2_3"></label>
                                </div>
                            </div>
                            <div class="col-6 mt-5" id="cek4" onclick="move4()">
                                <div class="progress" id="progress-lima">
                                    <label for="progress-loadLima" id="label1">Buat bisnis baru</label>
                                    <div class="progress-bar" id="progress-loadLima" role="progressbar"
                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                                <label for="progress-loadSatu" id="label2_4"></label>
                            </div>
                        </div>
                    </form>
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
                                    <div class="col-8" style="background-color: transparent;">
                                        <span id="span-1">
                                            Akses Pre-test
                                        </span>
                                    </div>
                                    <div class="col-2 pl-1" style="background-color: transparent;">
                                        <img src="{{ asset('img_poling/ceklis.png') }}" alt="pre-test">
                                    </div>
                            </li>
                        </ul>
                        <div class="card-header">
                            <div class="row" style="background-color: transparent">
                                <div class="col-10" style="background-color: transparent">
                                    <span id="text-pre">
                                        Chapter 1 : Perkenalan
                                    </span><br>
                                    <div class="row mt-4" style="background-color: transparent">
                                        <div class="col-8" style="background-color: transparent">
                                            <img src="{{ asset('img_poling/Vector (2).png') }}"
                                                style="background-color: transparent" alt="play">
                                            1 Subchapter
                                        </div>
                                        <div class="col-4" style="background-color: transparent">
                                            <img src="{{ asset('img_poling/Vector-1.png') }}"
                                                style="background-color: transparent" alt="play">
                                            6:00
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2" style="background-color: transparent;padding-left: 1%">
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
                                    <div class="col-8" style="background-color: transparent;padding:2px">
                                        <span id="span-1">
                                            Perkenalan
                                        </span>
                                    </div>
                                    <div class="col-2" style="background-color: transparent;padding:2px">
                                        <img src="{{ asset('img_poling/ceklis.png') }}" alt="pre-test">
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item" style="background-color:#4A90E2 ">
                                <div class="row" style="background-color: transparent">
                                    <div class="col-2" style="background-color: transparent;">
                                        <img src="{{ asset('img_poling/gg_poll.png') }}" alt="pre-test"
                                            style="background-color: transparent;">
                                    </div>
                                    <div class="col-8" style="background-color: transparent;padding:2px">
                                        <span id="span-1">
                                            Apa Pendapatmu
                                        </span>
                                    </div>
                                    <div class="col-2" style="background-color: transparent;padding:2px">
                                        <img src="{{ asset('img_poling/ceklis.png') }}"
                                            style="background-color: transparent;" alt="pre-test">
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="card-header">
                            <div class="row" style="background-color: transparent">
                                <div class="col-10" style="background-color: transparent">
                                    <span id="text-pre">
                                        Chapter 2 : Perbedaan Makeup sesuai Acara
                                    </span>
                                    <br>
                                    <div class="row mt-4" style="background-color: transparent">
                                        <div class="col-8" style="background-color: transparent">
                                            <img src="{{ asset('img_poling/Vector (2).png') }}"
                                                style="background-color: transparent" alt="play">
                                            2 Subchapter
                                        </div>
                                        <div class="col-4" style="background-color: transparent;">
                                            <img src="{{ asset('img_poling/Vector-1.png') }}"
                                                style="background-color: transparent" alt="play">
                                            12:00
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2" style="background-color: transparent;padding-left: 1% ">
                                    <img src="{{ asset('img_poling/Vector.png') }}" width="20px" height="10px"
                                        alt="vektor-1" style="background-color: transparent">
                                </div>
                            </div>
                        </div>
                        <div class="card-header">
                            <div class="row" style="background-color: transparent">
                                <div class="col-10" style="background-color: transparent">
                                    <span id="text-pre">
                                        Chapter 3 : Ragam Beauty Product
                                    </span>
                                    <br>
                                    <div class="row mt-4" style="background-color: transparent">
                                        <div class="col-8" style="background-color: transparent">
                                            <img src="{{ asset('img_poling/Vector (2).png') }}"
                                                style="background-color: transparent" alt="play">
                                            2 Subchapter
                                        </div>
                                        <div class="col-4" style="background-color: transparent;">
                                            <img src="{{ asset('img_poling/Vector-1.png') }}"
                                                style="background-color: transparent" alt="play">
                                            12:00
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2" style="background-color: transparent; padding-left:1%">
                                    <img src="{{ asset('img_poling/Vector.png') }}" width="20px" height="10px"
                                        alt="vektor-1" style="background-color: transparent">
                                </div>
                            </div>
                        </div>
                        <div class="card-header">
                            <div class="row" style="background-color: transparent">
                                <div class="col-10" style="background-color: transparent">
                                    <span id="text-pre">
                                        Chapter 4 : Mengenal Beauty Tools
                                    </span>
                                    <br>
                                    <div class="row mt-4" style="background-color: transparent">
                                        <div class="col-8" style="background-color: transparent">
                                            <img src="{{ asset('img_poling/Vector (2).png') }}"
                                                style="background-color: transparent" alt="play">
                                            2 Subchapter
                                        </div>
                                        <div class="col-4" style="background-color: transparent;">
                                            <img src="{{ asset('img_poling/Vector-1.png') }}"
                                                style="background-color: transparent" alt="play">
                                            12:00
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2" style="background-color: transparent; padding-left:1%">
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
    <script type="text/javascript">
        document.getElementById('cek').style.cursor = 'pointer'
        document.getElementById('cek1').style.cursor = 'pointer'
        document.getElementById('cek2').style.cursor = 'pointer'
        document.getElementById('cek3').style.cursor = 'pointer'
        document.getElementById('cek4').style.cursor = 'pointer'
        var i = 0;

        function move() {
            if (i == 0) {
                i = 1;
                var elem = document.getElementById("progress-loadSatu");
                var elem1 = document.getElementById("label2");
                var width = 0;
                var id = setInterval(frame, 10);

                function frame() {
                    if (width >= 100) {
                        clearInterval(id);
                        i = 0;
                    } else {
                        width++;
                        elem.style.width = width + "%";
                        elem1.style.width = width + "%";
                        elem.innerHTML
                        elem1.innerHTML = width + "%";
                    }
                }
            }
        }

        function move1() {
            if (i == 0) {
                i = 1;
                var elem = document.getElementById("progress-loadDua");
                var elem1 = document.getElementById("label2_1");
                var width = 0;
                var id = setInterval(frame, 10);

                function frame() {
                    if (width >= 100) {
                        clearInterval(id);
                        i = 0;
                    } else {
                        width++;
                        elem.style.width = width + "%";
                        elem1.style.width = width + "%";
                        elem.innerHTML
                        elem1.innerHTML = width + "%";
                    }
                }
            }
        }

        function move2() {
            if (i == 0) {
                i = 1;
                var elem = document.getElementById("progress-loadTiga");
                var elem1 = document.getElementById("label2_2");
                var width = 0;
                var id = setInterval(frame, 10);

                function frame() {
                    if (width >= 100) {
                        clearInterval(id);
                        i = 0;
                    } else {
                        width++;
                        elem.style.width = width + "%";
                        elem1.style.width = width + "%";
                        elem.innerHTML
                        elem1.innerHTML = width + "%";
                    }
                }
            }
        }

        function move3() {
            if (i == 0) {
                i = 1;
                var elem = document.getElementById("progress-loadEmpat");
                var elem1 = document.getElementById("label2_3");
                var width = 0;
                var id = setInterval(frame, 10);

                function frame() {
                    if (width >= 100) {
                        clearInterval(id);
                        i = 0;
                    } else {
                        width++;
                        elem.style.width = width + "%";
                        elem1.style.width = width + "%";
                        elem.innerHTML
                        elem1.innerHTML = width + "%";
                    }
                }
            }
        }

        function move4() {
            if (i == 0) {
                i = 1;
                var elem = document.getElementById("progress-loadLima");
                var elem1 = document.getElementById("label2_4");
                var width = 0;
                var id = setInterval(frame, 10);

                function frame() {
                    if (width >= 100) {
                        clearInterval(id);
                        i = 0;
                    } else {
                        width++;
                        elem.style.width = width + "%";
                        elem1.style.width = width + "%";
                        elem.innerHTML
                        elem1.innerHTML = width + "%";
                    }
                }
            }
        }
    </script>
@endsection
