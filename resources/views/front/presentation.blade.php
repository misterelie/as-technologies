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
            @if(!is_null($about))
            <div class="col-xs-12 col-sm-5 col-md-5">
                @if(!is_null($about->about_image ))
                    <div class="about-left wow fadeInDown" data-wow-delay="0.4s">
                        <img src="/AboutImage/{{ $about->about_image }}" class="img-fluid"
                        width="100px">
                    </div>
                @endif
            </div>
            <div class="col-xs-12 col-sm-7 col-md-7">
                <div class="about-right wow fadeInDown" data-wow-delay="0.8s">
                    @if(!is_null($about->sous_titre))
                        <h1 style="color: #3601c6">{{ $about->titre }}</h1>
                    @endif

                  @if(!is_null($about->sous_titre))
                        <h3>{{ $about->sous_titre }}</h3>
                  @endif

                  @if(!is_null($about->detail))
                    <p>
                        {!! $about->detail !!}
                    </p>
                   @endif
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection