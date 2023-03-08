@extends('layouts.base')
@section('content')

<div id="portfolio" class="portfolio-area section-padding">
    <div class="container">
        <div class="row">
            <div class="section-header">
                <h2>Quelques réalisations</h2>
                <p class="line1"></p>
                <p class="line2"></p>
            </div>
        </div>
        <div class="row">
            @if(!is_null($realisations))
            @foreach($realisations as $realisation)
            <div class="col-sm-4 col-md-6 col-lg-4">
                @if(!is_null($realisation->photo_realisation))
                <a href="#" title="" target="_blank" rel="noopener">
                    <div class="gallery-items wow fadeInLeft" data-wow-delay="0.2s" style="margin-bottom: 15px;">
                        <img class="img-thumbnail"
                            src="/ServiceImage/{{ $realisation->photo_realisation }}"
                            alt="" title="">
                    </div>
                </a>
                @endif
                
                @if(!is_null($realisation->libelle))
                <h3 class="gallery-linl">{{ $realisation->libelle}}</h3>
                @endif

            </div>
            @endforeach
            @endif
            
        </div>
    </div>
</div>
@endsection