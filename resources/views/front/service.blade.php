@extends('layouts.base')
@section('content')

<style>
    .btn-read-more {
        padding: 3px 3px;
        overflow: hidden;
        border-radius: 4px;
        transition: 0.5s;
        color: #fff;
        background: #3601c6;
        box-shadow: 0px 5px 25px rgb(65 84 241 / 30%);
    }

    span:hover{
        color: #fff;
    }
   
    .btn-read-more i {
        margin-left: 5px;
        font-size: 15px;
        transition: 0.3s;
    }.btn-read-more i:hover{
        color: #fff;
    }
</style>
<div id="services" class="services-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header">
                    <h2>Nos services</h2>
                    <p class="line1"></p>
                    <p class="line2"></p>
                </div>
            </div>
        </div>
        <div class="row">
            @if(!is_null($services))
                @foreach($services as $service)
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <a href="{{ route('front.detail_service', $service->id) }}"
                            style="text-decoration: none">
                            <div class="single-services text-center wow fadeInDown" data-wow-delay="0.6s">
                                @if(!is_null($service->image_service))
                                    <div class="services-icon">
                                        <img src="/ServiceImage/{{ $service->image_service }}" alt=""
                                            class="imag-fluid">
                                    </div>
                                @endif
                                <div class="services-content">
                                    @if(!is_null($service->libelle))
                                        <h3>{{ $service->libelle }}</h3>
                                    @endif

                                    @if(!is_null($service->resume))
                                        <h4 class="service-detail">
                                            {{ $service->resume }}
                                        </h4>
                                    @endif
                                    <div class="text-center text-start"><a
                                            href="{{ route('front.detail_service', $service->id) }}"
                                            style="text-decoration: none"
                                            class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                            <span>En savoir plus</span> <i class="fa fa-arrow-right"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
@yield('js')
@endsection