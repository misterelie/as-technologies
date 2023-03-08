@extends('layouts.base')
@section('content')

<style>
    .btn-read-more {
        line-height: 0;
        padding: 15px 40px;
        border-radius: 4px;
        transition: 0.5s;
        color: #fff;
        background: #3601c6;
        box-shadow: 0px 5px 25px rgb(65 84 241 / 30%);
    }.btn-read-more:hover{
        color: white:
    }

    .btn-read-more i {
        margin-left: 5px;
        font-size: 18px;
        transition: 0.3s;
    }
</style>
<div id="about" class="about-area section-padding">
    <div class="container">
        <div class="row">
            @if(!is_null($abouts))
            @foreach($abouts as $about)
            <div class="col-xs-12 col-sm-5 col-md-5">
                <div class="about-left wow fadeInDown" data-wow-delay="0.4s">
                    <img src="/AboutImage/{{ $about->about_image }}" class="img-fluid"
                    width="100px">
                </div>
            </div>
            <div class="col-xs-12 col-sm-7 col-md-7">
                <div class="about-right wow fadeInDown" data-wow-delay="0.8s">
                    <h1 style="color: #3601c6">{{$about->titre}}</h1>
                    <h3>{{ $about->sous_titre }}</h3>
                    <p style="text-align: justify;">
                        {{ $about->description }} <br>
                    </p>
                    {{-- <div class="text-center text-lg-start"><a href="#"
                            class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Lire Plus</span> <i class="fa fa-arrow-right"></i> </a>
                    </div> --}}
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</div>
@endsection