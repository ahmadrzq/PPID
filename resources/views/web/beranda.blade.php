@extends('web/layouts/master')
@section('content')

<!-- #region Jssor Slider Begin -->
<!-- Generator: Jssor Slider Composer -->
<!-- Source: https://www.jssor.com/demos/full-width-slider.slider/=edit -->
<script src="{{asset('web/js/jssor.slider-28.1.0.min.js')}}" type="text/javascript"></script>
<script type="text/javascript">
    window.jssor_1_slider_init = function() {

        var jssor_1_SlideoTransitions = [
            [{
                b: -1,
                d: 1,
                ls: 0.5
            }, {
                b: 0,
                d: 1000,
                y: 5,
                e: {
                    y: 6
                }
            }],
            [{
                b: -1,
                d: 1,
                ls: 0.5
            }, {
                b: 200,
                d: 1000,
                y: 25,
                e: {
                    y: 6
                }
            }],
            [{
                b: -1,
                d: 1,
                ls: 0.5
            }, {
                b: 400,
                d: 1000,
                y: 45,
                e: {
                    y: 6
                }
            }],
            [{
                b: -1,
                d: 1,
                ls: 0.5
            }, {
                b: 600,
                d: 1000,
                y: 65,
                e: {
                    y: 6
                }
            }],
            [{
                b: -1,
                d: 1,
                ls: 0.5
            }, {
                b: 800,
                d: 1000,
                y: 85,
                e: {
                    y: 6
                }
            }],
            [{
                b: -1,
                d: 1,
                ls: 0.5
            }, {
                b: 500,
                d: 1000,
                y: 195,
                e: {
                    y: 6
                }
            }],
            [{
                b: 0,
                d: 2000,
                y: 30,
                e: {
                    y: 3
                }
            }],
            [{
                b: -1,
                d: 1,
                rY: -15,
                tZ: 100
            }, {
                b: 0,
                d: 1500,
                y: 30,
                o: 1,
                e: {
                    y: 3
                }
            }],
            [{
                b: -1,
                d: 1,
                rY: -15,
                tZ: -100
            }, {
                b: 0,
                d: 1500,
                y: 100,
                o: 0.8,
                e: {
                    y: 3
                }
            }],
            [{
                b: 500,
                d: 1500,
                o: 1
            }],
            [{
                b: 0,
                d: 1000,
                y: 380,
                e: {
                    y: 6
                }
            }],
            [{
                b: 300,
                d: 1000,
                x: 80,
                e: {
                    x: 6
                }
            }],
            [{
                b: 300,
                d: 1000,
                x: 330,
                e: {
                    x: 6
                }
            }],
            [{
                b: -1,
                d: 1,
                r: -110,
                sX: 5,
                sY: 5
            }, {
                b: 0,
                d: 2000,
                o: 1,
                r: -20,
                sX: 1,
                sY: 1,
                e: {
                    o: 6,
                    r: 6,
                    sX: 6,
                    sY: 6
                }
            }],
            [{
                b: 0,
                d: 600,
                x: 150,
                o: 0.5,
                e: {
                    x: 6
                }
            }],
            [{
                b: 0,
                d: 600,
                x: 1140,
                o: 0.6,
                e: {
                    x: 6
                }
            }],
            [{
                b: -1,
                d: 1,
                sX: 5,
                sY: 5
            }, {
                b: 600,
                d: 600,
                o: 1,
                sX: 1,
                sY: 1,
                e: {
                    sX: 3,
                    sY: 3
                }
            }]
        ];

        var jssor_1_options = {
            $AutoPlay: 1,
            $LazyLoading: 1,
            $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
            },
            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
            },
            $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $SpacingX: 20,
                $SpacingY: 20
            }
        };

        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

        /*#region responsive code begin*/

        var MAX_WIDTH = 1600;

        function ScaleSlider() {
            var containerElement = jssor_1_slider.$Elmt.parentNode;
            var containerWidth = containerElement.clientWidth;

            if (containerWidth) {

                var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                jssor_1_slider.$ScaleWidth(expectedWidth);
            } else {
                window.setTimeout(ScaleSlider, 30);
            }
        }

        ScaleSlider();

        $Jssor$.$AddEvent(window, "load", ScaleSlider);
        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
        /*#endregion responsive code end*/
    };
</script>
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,regular,italic,700,700italic&subset=latin-ext,greek-ext,cyrillic-ext,greek,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />
<style>
    /* jssor slider loading skin spin css */
    .jssorl-009-spin img {
        animation-name: jssorl-009-spin;
        animation-duration: 1.6s;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
    }

    @keyframes jssorl-009-spin {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }


    /*jssor slider bullet skin 132 css*/
    .jssorb132 {
        position: absolute;
    }

    .jssorb132 .i {
        position: absolute;
        cursor: pointer;
    }

    .jssorb132 .i .b {
        fill: #fff;
        fill-opacity: 0.8;
        stroke: #000;
        stroke-width: 1600;
        stroke-miterlimit: 10;
        stroke-opacity: 0.7;
    }

    .jssorb132 .i:hover .b {
        fill: #000;
        fill-opacity: .7;
        stroke: #fff;
        stroke-width: 2000;
        stroke-opacity: 0.8;
    }

    .jssorb132 .iav .b {
        fill: #000;
        stroke: #fff;
        stroke-width: 2400;
        fill-opacity: 0.8;
        stroke-opacity: 1;
    }

    .jssorb132 .i.idn {
        opacity: 0.3;
    }

    .jssora051 {
        display: block;
        position: absolute;
        cursor: pointer;
    }

    .jssora051 .a {
        fill: none;
        stroke: #fff;
        stroke-width: 360;
        stroke-miterlimit: 10;
    }

    .jssora051:hover {
        opacity: .8;
    }

    .jssora051.jssora051dn {
        opacity: .5;
    }

    .jssora051.jssora051ds {
        opacity: .3;
        pointer-events: none;
    }
</style>
<svg viewbox="0 0 0 0" width="0" height="0" style="display:block;position:relative;left:0px;top:0px;">
    <defs>
        <filter id="jssor_1_flt_1" x="-50%" y="-50%" width="200%" height="200%">
            <feGaussianBlur stddeviation="4"></feGaussianBlur>
        </filter>
        <radialGradient id="jssor_1_grd_2">
            <stop offset="0" stop-color="#fff"></stop>
            <stop offset="1" stop-color="#000"></stop>
        </radialGradient>
        <mask id="jssor_1_msk_3">
            <path fill="url(#jssor_1_grd_2)" d="M600,0L600,400L0,400L0,0Z" x="0" y="0" style="position:absolute;overflow:visible;"></path>
        </mask>
    </defs>
</svg>
<div id="jssor_1" style="position:relative;margin:0 auto;top:110px;left:0px;width:1600px;height:560px;overflow:hidden;visibility:hidden;">
    <!-- Loading Screen -->
    <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
    </div>
    <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1600px;height:560px;overflow:hidden;">
        @foreach($slider as $img)
        <div>
            <img data-u="image" data-src="{{asset($img->gambar)}}" />
            <div data-ts="flat" data-p="540" data-po="40% 50%" style="left:0px;top:0px;width:1600px;height:560px;position:absolute;">
                <div data-to="50% 50%" data-ts="preserve-3d" data-t="6" style="left:350px;top:360px;width:900px;height:500px;position:absolute;">
                    <svg viewbox="0 0 800 100" width="800" height="100" data-t="9" style="left:40px;top:150px;display:block;position:absolute;opacity:0;font-family:'Roboto Condensed',sans-serif;font-size:80px;font-weight:900;letter-spacing:0.5em;overflow:visible;">
                        <text fill="rgba(255,255,255,0.1)" stroke="#ffffff" text-anchor="middle" x="400" y="50">SELAMAT DATANG
                        </text>
                        <text fill="rgba(255,255,255,0.1)" stroke="#ffffff" text-anchor="middle" x="400" y="150">DI PPID
                        </text>
                        <text fill="rgba(255,255,255,0.1)" stroke="#ffffff" text-anchor="middle" x="400" y="250">KOTA PROBOLINGGO
                        </text>
                    </svg>
                </div>
            </div>
        </div>
        @endforeach
    </div><a data-scale="0" href="" style="display:none;position:absolute;"></a>
    <!-- Bullet Navigator -->
    <div data-u="navigator" class="jssorb132" style="position:absolute;bottom:24px;right:16px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
        <div data-u="prototype" class="i" style="width:12px;height:12px;">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="b" cx="8000" cy="8000" r="5800"></circle>
            </svg>
        </div>
    </div>
    <!-- Arrow Navigator -->
    <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
        </svg>
    </div>
    <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
        </svg>
    </div>
</div>
<script type="text/javascript">
    jssor_1_slider_init();
</script>
<!-- #endregion Jssor Slider End -->

<div class="content-box content-home" style="margin-top: 100px !important;">

    <section class="content-blank blue-section pb-0">
        <div class="container">
            <div class="title-section mb-2 text-center">
                <h4 class="text-capitalize head-title">Layanan Informasi Publik</h4>
                <p class="head-sub-desc">Klik pada icon untuk melihat detail</p>
            </div>
            <div class="card">
                <div class="row m-t-20">
                    <div class="col-md-4 mb-3">
                        <ul class="nav tabs-vertical flex-column" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="item active" id="daftar-informasi-publik-tab" data-toggle="tab" href="#DaftarInformasiPublik_Tabs" role="tab" aria-controls="DaftarInformasiPublik_Tabs" aria-selected="true">
                                    <div class="head-icon">
                                        <div class="tabs-icon">
                                            <!-- daftar informasi publik -->
                                            <i class="fas fa-book fa-2x"></i>
                                        </div>
                                    </div>
                                    <span>Daftar Informasi Publik</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="item" id="permohonan-informasi-tab" data-toggle="tab" href="#PermohonanInformasi_Tabs" role="tab" aria-controls="PermohonanInformasi_Tabs" aria-selected="false">
                                    <div class="head-icon">
                                        <div class="tabs-icon">
                                            <!-- permohonan informasi -->
                                            <i class="fas fa-envelope-open-text fa-2x"></i>
                                        </div>
                                    </div>
                                    <span>Permohonan Informasi</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-8 mb-3">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="DaftarInformasiPublik_Tabs" role="tabpanel" aria-labelledby="daftar-informasi-publik-tab">
                                <form method="get" action="{{route('dokumen-view')}}">
                                    <h6 class="font-600 mb-3">Daftar Informasi Publik</h6>
                                    <p>
                                        Merupakan Daftar Informasi yang diumumkan kepada publik mengenai <br>
                                        1. Informasi Wajib disediakan dan diumumkan <br>
                                        2. Informasi diumumkan serta merta <br>
                                        3. Informasi setiap saat <br>
                                        Dimana Informasi diatas merupakan Informasi yang terdapat pada Bagian / Bidang Seksi yang menguasai
                                    </p>
                                    <button class="btn btn-primary">Kunjungi</button>
                                </form>
                            </div>

                            <div class="tab-pane fade" id="PermohonanInformasi_Tabs" role="tabpanel" aria-labelledby="permohonan-informasi-tab">
                                <h6 class="font-600 mb-3">Permohonan Informasi</h6>
                                <p>
                                    Setiap orang berhak memperoleh informasi publik sesuai dengan ketentuan Undang-Undang No 14 Tahun 2008
                                    selain itu setiap permohonan informasi publik berhak mengajukan permintaan informasi publik. Melalui
                                    aplikasi PPID Kemendagri ini setiap orang dapat mengajukan permohonan informasi secara mudah. Selain itu
                                    badan publik dapat memberi respon permohonan informasi yang diajukan sesuai ketentuan undang-undang.
                                </p>
                                <a href="{{route('menu.ajukan')}}" class="btn btn-primary">Kunjungi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content-blank blue-section pb-0">
        <div class="container">
            <div class="title-section mb-2 text-center">
                <h4 class="text-capitalize head-title">Berita</h4>
                <p class="head-sub-desc">Informasi Seputar Probolinggo</p>
            </div>
            <div class="card" style="padding: 2rem;">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <div class="row">
                            @foreach ($berita as $result)
                            <div class="card col-md-4 mb-2">
                                <img class="" src="{{$result->image}}" alt="Card image cap" style="max-width: 100%;height: 200px;">
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: 25px;"><a href="{{route('berita.isi', $result->id)}}"><strong> {{$result->judul}}</strong></a></h5>
                                    <p class="card-text mb-0"><small class="text-muted"><i class="fas fa-clock"></i><em> {{ Carbon\Carbon::parse($result->created_at)->format("d/m/Y") }}</em></small></p>
                                    <p class="card-text"><small class="text-muted"><i class="fas fa-user"></i><em> {{$result->author}}</em></small></p>
                                    <p class="mb-4 pt-3" style="text-align: justify;">{!! str_limit(strip_tags($result->isi),$limit=200,$end="...") !!}</p>
                                    <a href="{{route('berita.isi', $result->id)}}"><em> Read More</em></a>
                                </div>

                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <a href="{{route('berita.list')}}" class="btn btn-sm" style="color: white;background-color: #022835;">Load More</a>
            </div>

        </div>
    </section>

    <section class="content-blank blue-section pb-0">
        <div class="container">
            <div class="title-section mb-3 text-center">
                <h4 class="text-capitalize head-title">Informasi</h4>
                <p class="head-sub-desc">Klik judul informasi untuk melihat</p>
            </div>

            <div class="row m-t-70">
                <div class="col-md-6 mb-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="icon-circle rgba-blue">
                            <img src="http://ppid.kemendagri.go.id/assets_v1/images/icons/newspaper.png" class="img-fluid" alt="" width="20">
                        </div>
                        <p class="text-default font-600 mb-0">Informasi Terbaru</p>
                    </div>

                    <div class="card">
                        <ul class="list-default">
                        @foreach($dokumen as $dok)
                            <li>
                                <a href="{{route('detail-dok', $dok->id)}}">
                                    <p class="title">{{$dok->judul}}</p>
                                    <p class="desc">{{$dok->dinas->nama}}</p>
                                </a>
                            </li> 
                        @endforeach
                        </ul>
                    </div>
                </div>
<!-- 
                <div class="col-md-6 mb-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="icon-circle rgba-blue">
                            <img src="http://ppid.kemendagri.go.id/assets_v1/images/icons/contract.png" class="img-fluid" alt="" width="20">
                        </div>
                        <p class="text-default font-600 mb-0">Informasi Paling Banyak Dimohon</p>
                    </div>

                    <div class="card">
                        <ul class="list-default">
                            <li>
                                <a href="http://ppid.kemendagri.go.id/front/dokumen/detail/300010492">
                                    <p class="title">SPIP DPPKBP3A Tahun 2017</p>
                                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                                        <p class="desc">Kabupaten Solok - Dinas Pengendalian Pen...</p>
                                        <span class="fs-13 text-warning">151722 kali</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="http://ppid.kemendagri.go.id/front/dokumen/detail/300007625">
                                    <p class="title">BUKU PEDOMAN EPIDEMIOLOGI PENYAKIT EDISI REVISI 2011</p>
                                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                                        <p class="desc">Kabupaten Tanah Datar - DINAS KESEHATAN</p>
                                        <span class="fs-13 text-warning">118008 kali</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="http://ppid.kemendagri.go.id/front/dokumen/detail/500007446">
                                    <p class="title">Kabupaten Dalam Angka Tahun 2012</p>
                                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                                        <p class="desc">Kabupaten Penajam Paser Utara - Dinas Ko...</p>
                                        <span class="fs-13 text-warning">114361 kali</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="http://ppid.kemendagri.go.id/front/dokumen/detail/500059033">
                                    <p class="title">PENGUMUMAN HASIL SELEKSI ADMINISTRASI PENGADAAN CALON PEGAWAI NEGERI SIPIL (CPNS) DI LINGKUNGAN PEMERINTAH KABUPATEN SUKAMARA TAHUN 2019</p>
                                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                                        <p class="desc">Kabupaten Sukamara - Badan Kepegawaian d...</p>
                                        <span class="fs-13 text-warning">45636 kali</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="http://ppid.kemendagri.go.id/front/dokumen/detail/40010000093">
                                    <p class="title">TUPOKSI KEPALA SATUAN SUB BAGIAN UMUM &amp; KEPEGAWAIAN POLISI PAMONG PRAJA DAN PEMADAM KEBAKARAN BANTAENG</p>
                                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                                        <p class="desc">Sulawesi Selatan - Satuan Pol PP dan Pem...</p>
                                        <span class="fs-13 text-warning">35461 kali</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="http://ppid.kemendagri.go.id/front/dokumen/detail/300009947">
                                    <p class="title">LAPORAN ADIWIYATA TH 2016</p>
                                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                                        <p class="desc">Kabupaten Solok - Dinas Lingkungan Hidup...</p>
                                        <span class="fs-13 text-warning">32062 kali</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

    <section class="content-blank blue-section  miring-300 ">
        <div class="container">
            <div class="title-section mb-3 text-center">
                <h4 class="text-capitalize head-title">Statistik</h4>
                <p class="head-sub-desc">Informasi statistik dokumen</p>
            </div>

            <div class="card card-lg pd-auto m-t-70">
                <div class="row">
                    <div class="col-sm">
                        <div class="row">
                            <div class="col-sm">
                                <div class="d-flex align-items-center m-b-30">
                                    <div class="head-icon">
                                        <div class="icon-circle cirlce-lg rgba-blue m-r-25">
                                            <img src="" class="img-fluid" alt="" width="25">
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-1">Jumlah Dokumen</p>
                                        <h5 class="font-700 mb-0">{{$dokumen->count()}}</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm">
                                <div class="d-flex align-items-center m-b-30">
                                    <div class="head-icon">
                                        <div class="icon-circle cirlce-lg rgba-blue m-r-25">
                                            <img src="" class="img-fluid" alt="" width="25">
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-1">Jumlah Permohonan Informasi</p>
                                        <h5 class="font-700 mb-0">{{$permohonan->count()}}</h5>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm">
                                <div class="d-flex align-items-center m-b-30">
                                    <div class="head-icon">
                                        <div class="icon-circle cirlce-lg rgba-blue m-r-25">
                                            <img src="" class="img-fluid" alt="" width="25">
                                        </div>
                                    </div>
                                    <div>
                                        <p class="mb-1">Jumlah User</p>
                                        <h5 class="font-700 mb-0">{{$users->count()}}</h5>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="content-blank blue-section" style="padding-top: 10rem;">
        <div class="container">
    <section class="content-blank blue-section">

    </section>
</div>
@endsection