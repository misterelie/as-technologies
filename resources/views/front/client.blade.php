@extends('layouts.base')
@section('content')

<div id="resume" class="resume-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header">
                    <h2>Nos clients</h2>
                    <p class="line1"></p>
                    <p class="line2"></p>
                </div>
            </div>
        </div>
        <div class="row">
            @if(!is_null($clients))
            @foreach($clients as $client)
            <div class="col-md-6">
                <div class="timeline">
                    <div class="wrapper right">
                        <div class="content">
                            <div class="education-area wow fadeInDown" data-wow-delay="0.2s">
                                @if(!is_null($client->nom_client))
                                    <h3>{{$client->nom_client}}</h3>
                                @endif
                                
                                @if(!is_null($client->secteur_activity))
                                    <h3 style="font-size: 13px; color: #000000;">{{$client->secteur_activity}}</h3>
                                @endif

                                @if(!is_null($client->logo_client ))
                                    <a href=""><h3><img src="/ServiceImage/{{ $client->logo_client }}" width="150px"
                                        class="img-fluid"></a>
                                    </h3>
                                @endif

                                @if(!is_null($client->temoignage))
                                    <p class="text-taille-18  color-7b7575"><h3>Témoignage: </h3>{{$client->temoignage}}
                                    </p>
                                @endif
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
            @endforeach
        @endif
        </div>
        
    </div>
</div>

@endsection