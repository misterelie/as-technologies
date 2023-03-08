@extends('layouts.base')
@section('content')


<style>
    .card-body {
        flex: 1 1 auto;
        min-height: 1px;
        padding: 1.25rem;
    }

    .row {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -12px;
        margin-left: -12px;
    }.card {
        box-shadow: 0px 2px 4px rgb(31 30 47 / 3%);
        margin-bottom: 50px;
        background-color: #fff;
        border: 1px solid #eceff5;
    }.card {
        
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-clip: border-box;
        border-radius: 0.25rem;
    }.ribbon1 {
        position: absolute;
        top: -6.1px;
        right: 10px;
    }.page-wrapper .page-content {
    width: 100%;
    position: relative;
    min-height: 100vh;
    padding: 0 15px 60px 15px;
    display: inline-block;
}.ribbon1 span {
    display: block;
    padding: 6px 4px 0px;
    border-top-right-radius: 6px;
    width: 60px;
    font-size: 11px;
    font-weight: 500;
}.ribbon1 span.rib1-primary:before, .ribbon1 span.rib1-primary {
    background: #3601c6;
}.text-white {
    color: #fff !important;
}.ml-auto, .mx-auto {
    margin-left: auto !important;
}.mb-4, .my-4 {
    margin-bottom: 1.5rem !important;
}.mr-auto, .mx-auto {
    margin-right: auto !important;
}.d-block {
    display: block !important;
    margin-left: 5px;
    font-size: 12px;
}.badge{
    box-shadow: none;
    font-size: 16px !important;
    line-height: 10px;
    display: inline-block;
    padding: 0.46em 0.6em;
    border-radius: 0.25rem;
    margin-left: 5px;
}.mb-2, .my-2 {
    margin-bottom: 0.5rem !important;
}.badge-light{
    color: white;
    background-color: #000;
}.col{
    flex-grow: 1;
    min-width: 0;
    max-width: 100%;
    flex-basis: 0;
}.btn-soft-primary{
    background-color: rgba(23,97,253,0.1);
    color: #3601c6;
}.btn:not(:disabled):not(.disabled) {
    cursor: pointer;
}* {
    outline: none !important;
}
h4 {
    line-height: 22px;
}.text-dark {
    color: #3601c6 !important;
    font-size: 25px;
}.mt-0, .my-0 {
    margin-top: 0 !important;
}.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
    color: #303e67;
    margin: 10px 0;
}h4, .h4 {
    font-size: 20px;
}img[Attributes Style] {
    height: 150px;
}sub, sup{
    margin-right: 7px;
}.breadcrumb{
    background-color: #3601c6 !important;
}.section-image img{
    height: 200px;
    max-width: 200px;
    position: relative;
    overflow: hidden;
    margin-bottom: 15px;

}
</style>
<section>
    <div class="page-content">
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="row" style="margin-top: 25px">
                            <div class="col">
                                <h4 class="page-title text-center">Filtrer par critères</h4>
                                <ol class="breadcrumb">
                                    <form action="" action="">
                                        <div class="row">
                                            <div class="col-sm-4 mb-2">
                                                {{ (old('categorie')) }}
                                                <select class="form-select form-control" name="categorie_id"
                                                    id="categorie_id" required>
                                                    <option value="Choisir la catégorie"> Choisir la Catégorie
                                                    </option>
                                                    @if(!is_null($categories))
                                                        @foreach($categories as $categorie)
                                                            <option value="{{ $categorie->id }}"
                                                                {{ !is_null(old("categorie")) ? 'selected' : '' }}>
                                                                {{ Str::ucfirst($categorie->designation) }}
                                                            </option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                            
                                            <div class="col-sm-4 mb-2">
                                                {{ (old('marque')) }}
                                                <select class="form-select form-control" name="marque_id"
                                                    id="marque_id" required>
                                                    <option value="Choisir la catégorie"> Choisir la marque
                                                    </option>
                                                    @if(!is_null($marques))
                                                        @foreach($marques as $marque)
                                                            <option value="{{ $marque->id }}"
                                                                {{ !is_null(old("marque")) ? 'selected' : '' }}>
                                                                {{ Str::ucfirst($marque->designation) }}
                                                            </option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                            
                                            <div class="col-sm-4 mb-2">
                                                <button type="sutmit" class="btn btn-block">AFFICHER</button>
                                            </div>
                                        </div>
                                        
                                    </form>
                                </ol>
                            </div>
                            <!--end col-->
                        
                        </div>
                        <!--end row-->
                    </div>
                    <!--end page-title-box-->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <!-- end page title end breadcrumb --> <br><br>
            <div class="row">
                @if(!is_null($produits))
                @foreach($produits as $produit)
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                           <div class="section-image">
                            @if(!is_null($produit->photos))
                            <img src="/ProduitsImage/{{ $produit->photos }}" alt="" class="d-block mx-auto">
                            @endif
                           </div>
                            <div class="row my-4">
                                <div class="col"><span class="badge badge-light mb-2">Prix</span> <a href="#"
                                        class="title-text d-block">{{$produit->nom_produit}}</a>
                                </div>
                                <div class="col-auto">
                                    
                                    <h4 class="text-dark mt-0">{{$produit->prix}}<sub>FCFA</sub><small
                                            class="text-muted font-14"></small>
                                    </h4>
                                </div>
                            </div>
                            <a href="{{ url('detail/produit', $produit->id) }}">
                                <button class="btn btn-soft-primary btn-block">
                                    En savoir plus
                                </button>
                            </a>
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->
                </div>
                <!--end col-->
                @endforeach
                @endif
            </div>
            <!--end row-->
            
            <!--end row-->
        </div><!-- container -->

        <!--end footer-->
    </div>
</section>
@endsection