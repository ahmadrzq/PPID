@extends('web/layouts/master')
@section('judul')
{{$berita->judul}}
@endsection
@section('content')
<div class="content-box content-page" style="padding-top: 110px !important;">
    <div class="container">
        <div class="breadcrumb">
            <ul>
                <li><a href="{{url('beranda')}}">Home</a></li>
                <li><a href="{{route('berita.list')}}">Berita</a></li>
                <li><a href="">{{$berita->judul}}</a></li>
            </ul>
        </div>
    </div>
    <section class="content-blank blue-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12 mb-5">
                            <div class="single-blog-item">

                                <div class="blog-item-content bg-white p-4">
                                    <div class="gambar" style="text-align: center;">
                                        <img loading="lazy" src="{{asset($berita->image)}}" alt="blog" class="img-fluid rounded">
                                    </div>

                                    <h2 class="mt-3 mb-4">{{$berita->judul}}</h2>
                                    <div class="blog-item-meta bg-gray pt-2 pb-1 px-3">
                                        <span class="text-black text-capitalize mr-3"><i class="fas fa-user mr-1"></i>Oleh {{$berita->author}}</span>
                                        <span class="text-black text-capitalize mr-3"><i class="fas fa-clock mr-1"></i>Pada {{ Carbon\Carbon::parse($berita->created_at)->format("d/m/Y") }}</span>
                                    </div>
                                    <p class="lead mb-4">{!! $berita->isi !!}</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection