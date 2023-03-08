@extends('layouts.base')
@section('content')

<style>
    .card-body{
    -webkit-box-flex: 1;
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1.25rem;
    
    }
    .card{
        margin-bottom: 30px;
        margin-top: 35px;
        margin-left: 70px;
        margin-right: 70px;
        height: auto;
        background-color: #fff;
        border: 1px solid #eceff5;
        box-shadow: 0px 2px 4px rgb(31 30 47 / 3%);
    }
    .row{
        flex-wrap: wrap;
        margin-right: -12px;
        margin-left: -12px;
    }
    .ml-auto, .mx-auto {
    margin-left: auto !important;
    }* {
    outline: none !important;
}
.align-self-center{
 align-self: center !important;

}

.section-imag{
    height: 300px;
    width: 300px;
    margin-left: 145px;
    overflow: hidden;
    position: relative;
}

img {
    vertical-align: middle;
    border-style: none;
    
}.d-block {
    display: block !important; 
}.mb-1, .my-1 {
    margin-bottom: 0.25rem !important;
}

p{
    line-height: 1.6;
    font-size: 15px;
    font-weight: 400;
    margin-top: 0;
}
.single-pro-detail .custom-border{
    width: 60px;
    height: 2px;
    background-color: #1d2c48;
}.mb-3, .my-3 {
    margin-bottom: 1rem !important;
}.single-pro-detail .pro-title {
    color: #303e67;
    font-size: 24px;
}

h3 {
    line-height: 30px;
}
.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
    color: #303e67;
    margin: 10px 0;
}.text-muted {
    color: #000 !important;
}.mb-2, .my-2 {
    margin-bottom: 0.5rem !important;
}.single-pro-detail .pro-price {
    color: #303e67;
    font-size: 22px;
    font-weight: 600;
    margin-bottom: 0;
}
h2 {
    line-height: 35px;
}.single-pro-detail .pro-price span {
    font-size: 14px;
    color: #8997bd;
}.single-pro-detail .pro-price span {
    font-size: 14px;
    color: #8997bd;
}.text-danger {
    color: #f5325c !important;
}.font-weight-bold {
    font-weight: 700 !important;
}.ml-2, .mx-2 {
    margin-left: 0.5rem !important;
}.mt-3, .my-3 {
    margin-top: 1rem !important;
}

button, input {
    overflow: visible;
}.btn-soft-primary {
    background-color: rgba(23,97,253,0.1);
    color: #1761fd;
}.list-inline{
    color: #f5325c
    
}

.social-btn-sp {
                margin: 0 auto;
                max-width: 500px;
            }
            .social-btn-sp #social-links ul li {
                display: inline-block;
            }          
            .social-btn-sp #social-links ul li a {
                padding: 15px;
                margin: 1px;
                font-size: 25px;
            }
            table #social-links{
                display: inline-table;
            }
            table #social-links ul li{
                display: inline;
            }
            table #social-links ul li a{
                padding: 5px;
                border: 1px solid #ccc;
                margin: 1px;
                font-size: 15px;
                background: #e3e3ea;}
</style>

<section>
   <div class="page-content">
    <div class="container-fluid">
        <div class="row">
            @if(!is_null($produit))
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            @if(!is_null($produit->photos))
                            <div class="col-lg-6 align-self-center section-imag"><img src="/ProduitsImage/{{ $produit->photos }}"
                                    alt="" class="mx-auto d-block" height="300">
                            </div>
                            @endif

                            <!--end col-->
                            <div class="col-lg-6 align-self-center">
                                <div class="single-pro-detail">
                                    <p class="mb-1">Détails</p>
                                    <div class="custom-border mb-3"></div>
                                    @if(!is_null($produit->nom_produit))
                                    <h3 class="pro-title">{{$produit->nom_produit}}</h3>
                                    @endif

                                    <p style="font-seize: 14px;" class="text-muted mb-0">{{$produit->marque->designation  ?? ''}}</p>
                                   
                                    @if(!is_null($produit->prix))
                                        <h2 class="pro-price">{{ $produit->prix }}<span><del></del></span><span
                                                class="text-danger font-weight-bold ml-2">FCFA</span>
                                        </h2>
                                    @endif

                                    @if(!is_null($produit->resume_produit))
                                        <h6 class="text-muted font-14">Résumé :</h6>
                                        <ul class="list-unstyled pro-features border-0">
                                            <li>{!!$produit->resume_produit!!}</li>
                                            <li></li>
                                        </ul> <br>
                                    @endif

                                    {{-- <h6 class="text-muted font-13">Partagez :</h6> --}}
{{--                                    
                                    <ul class="list-unstyled pro-features social-btn-sp border-0">
                                        {!! $shareButtons !!}
                                    </ul> --}}
                                  
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end card-body-->
                </div>
                <!--end card-->
            </div>
            @endif
            <!--end col-->
        </div>
        
        @if(!is_null($produit))
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="mt-0">Description</h5>
                            <p class="text-muted mb-3 font-14">{!! $produit->detail_produit !!}</p>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
            </div>
        @endif
    </div>
   </div>
</section>
@endsection