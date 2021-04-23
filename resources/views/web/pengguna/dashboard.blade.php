@extends('web/layouts/master')
@section('judul')
Dashboard
@endsection
@section('content')
<div class="content-box content-page" style="padding-top: 110px !important;">
    <div class="container">
        <div class="breadcrumb">
            <ul>
                <li><a href="{{url('beranda')}}">Home</a></li>
                <li><a href="">Dashboard</a></li>
            </ul>
        </div>
    </div>
    <section class="content-blank blue-section">
        <div class="container">
            @include('web/pengguna/bar')
        </div>
    </section>
</div>

@endsection