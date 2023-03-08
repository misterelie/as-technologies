@extends('layouts.base')
@section('content')

<style>
    .btn-read-more {
        line-height: 0;
        padding: 15px 40px;
        border-radius: 4px;
        transition: 0.5s;
        color: #fff;
        background: #4154f1;
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
            @if(!is_null($service))
           
            <div class="col-xs-12 col-sm-5 col-md-5">
                @if(!is_null($service->image_service))
                <div class="about-left wow fadeInDown" data-wow-delay="0.4s">
                    <img src="/ServiceImage/{{ $service->image_service }}" class="img-fluid"
                    width="100px">
                </div>
                @endif
            </div>
            <div class="col-xs-12 col-sm-7 col-md-7">
                <div class="about-right wow fadeInDown" data-wow-delay="0.8s">
                    <h1 style="color: #3601c6"></h1>
                    <h3></h3>
                    @if(!is_null($service->detail))
                    <p style="text-align: justify;">
                        {!! $service->detail !!} <br>
                    </p>
                    @endif
                    {{-- <div class="text-center text-lg-start"><a href="#"
                            class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Lire Plus</span> <i class="fa fa-arrow-right"></i> </a>
                    </div> --}}
                </div>
            </div>
            
            @endif
        </div>
    </div>
</div>
@endsection