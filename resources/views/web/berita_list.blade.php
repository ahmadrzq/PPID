@extends('web/layouts/master')
@section('content')
<div class="content-box content-page" style="padding-top: 110px !important;">
    <div class="container">
        <div class="breadcrumb">
            <ul>
                <li><a href="{{url('beranda')}}">Home</a></li>
                <li><a href="">List Berita</a></li>
            </ul>
        </div>
    </div>
    <section class="content-blank blue-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        @foreach($berita as $result)
                        <div class="col-lg-4 col-md-4 mb-5">
                            <div class="blog-item">
                                <div class="gambar">
                                    <img loading="lazy" src="{{$result->image}}" alt="" class="img-fluid rounded" style="width: 350px; height: 200px; max-width: 100%; max-height: 100%; object-fit: cover;">
                                </div>

                                <div class="blog-item-content bg-white p-4">
                                    <p class="card-text" style="margin-bottom: 0;"><small class="text-muted"><i class="fas fa-clock"></i> {{ Carbon\Carbon::parse($result->created_at)->format("d/m/Y") }}</small></p>
                                    <p class="card-text"><small class="text-muted"><i class="fas fa-user"></i> {{$result->author}}</small></p>
                                    <h3 class="mt-0 mb-3"><a href="{{route('berita.isi', $result->id)}}">{{$result->judul}}</a></h3>
                                    <p class="mb-4" style="text-align: justify;">{!! str_limit(strip_tags($result->isi),$limit=200,$end="...") !!}</p>
                                    <a href="{{route('berita.isi', $result->id)}}" class="btn btn-sm" style="color: white;background-color: #022835;">Learn More</a>
                                </div>
                            </div>
                        </div>
                        @endforeach                       
                    </div>
                    {{$berita->links()}}
                </div>
            </div>
        </div>
    </section>
</div>
@endsection