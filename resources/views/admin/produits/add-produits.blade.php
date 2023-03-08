@extends('layouts.admin_master')
@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row">
                <div class="col">
                    <h4 class="page-title">Nos produits</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Produits</li>
                    </ol>
                </div>
                <!--end col-->
                <div class="col-auto align-self-center"><a href="#" class="btn btn-sm btn-outline-primary"
                        id="Dash_Date"><span class="day-name" id="Day_Name">Today:</span>&nbsp; <span class=""
                            id="Select_date">Jan
                            11</span> <i data-feather="calendar" class="align-self-center icon-xs ml-1"></i> </a><a
                        href="#" class="btn btn-sm btn-outline-primary"><i data-feather="download"
                            class="align-self-center icon-xs"></i></a></div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end page-title-box-->
    </div>
    <!--end col-->
</div>

<div class="row">
    <div class="col-12 mb-2">
        <div class="form-group ">
            <!--AFFICHER LE MESSAGE DE SUCCESS-->
            @if($message = Session::get('success'))
                <div class="alert alert-success">
                    <p class="text-center text-uppercase">{{ $message }}</p>
                </div>
            @endif

            @if($message = Session::get('error'))
                <div class="alert alert-danger">
                    <p class="text-center">{{ $message }}</p>
                </div>
            @endif<br><br>

            <!--AFFICHER LE MESSAGE D'ERROR-->
            @if($errors->any())
                <div class="alert alert-danger">
                    <p>Oups</p> Il y a eu des problèmes avec votre entrée.<br><br>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!--EN ERROR-->
        </div>
        <div class="card">
            <div class="card-header">
                <div class="card-body"><button type="button" class="btn btn-outline-primary" data-toggle="modal"
                        data-target="#exampleModalLogin">Ajouter un produit</button>
                    <!--modal-->
                    <div class="modal fade" id="exampleModalLogin" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalDefaultLogin" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <!--end modal-header-->
                                <div class="modal-body">
                                    <div class="card-body p-0 auth-header-box">
                                        <div class="text-center p-3">
                                            <h4 style="color: red" class="mt-3 mb-1 font-weight-semibold font-18">
                                                Veuillez remplir ces champs svp !</h4>
                                        </div>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane active p-3 pt-3" id="LogIn_Tab" role="tabpanel">
                                            <form class="form-horizontal auth-form my-4" method="POST"
                                                action="{{ url('save/product') }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <!--end form-group-->
                                                <div class="form-group"><label for="nom_produit">Nom</label>
                                                    <div class="input-group mb-3"><input type="text"
                                                            class="form-control" name="nom_produit" id="nom_produit"
                                                            value="{{ old('nom_produit') }}"
                                                            placeholder="Ajouter le nom du produit">
                                                    </div>
                                                    @error('nom_produit')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <!--end form-group-->
                                                <div class="form-group mb-2"><label for="categorie_id">Catégorie</label>
                                                    {{ (old('categorie')) }}
                                                    <select class="form-select form-control" name="categorie_id"
                                                        id="categorie_id" required>
                                                        <option value="Choisir la catégorie"> Choisir la Catégorie
                                                        </option>
                                                        @if(!is_null($categories))
                                                            @foreach($categories as $categorie)
                                                                <option value="{{ $categorie->id }}"
                                                                    {{ !is_null(old("service")) ? 'selected' : '' }}>
                                                                    {{ Str::ucfirst($categorie->designation) }}
                                                                </option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>

                                                <div class="form-group mb-2"><label for="marque_id">Marque</label>
                                                    {{ (old('marque')) }}
                                                    <select class="form-select form-control" name="marque_id"
                                                        id="marque_id" required>
                                                        <option value="Choisir la marque"> Choisir la marque du produi
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

                                                @error('marque_id')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                <!--end form-group-->
                                                <div class="form-group"><label for="prix">Prix</label>
                                                    <div class="input-group mb-3"><input type="number"
                                                            class="form-control" name="prix" id="prix"
                                                            value="{{ old('prix') }}"
                                                            placeholder="FCFA">
                                                    </div>
                                                    @error('prix')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <!--end form-group-->

                                                <div class="form-group"><label for="photos">Photos</label>
                                                    <div class="custom-file"><input type="file"
                                                            value="{{ old('photos') }}"
                                                            class="custom-file-input" id="validatedCustomFile"
                                                            name="photos" required=""><label class="custom-file-label"
                                                            for="validatedCustomFile">Choisir la photo du produit
                                                        </label>
                                                    </div>
                                                    @error('photos')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <!--end form-group-->
                                                <div class="form-group"><label for="resume_produit">Résumé</label>
                                                    <div class="input-group mb-3">
                                                        <textarea class="form-control" rows="5" id="resume_produit"
                                                            name="resume_produit" placeholder="">
                                                     </textarea>
                                                    </div>
                                                    @error('resume_produit')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <!--end form-group-->

                                                <!--end form-group-->
                                                <div class="form-group"><label for="detail_produit">Description
                                                        détaillée</label>
                                                    <div class="input-group mb-3">
                                                        <textarea class="form-control summernote" rows="5"
                                                            id="detail_produit" name="detail_produit"
                                                            placeholder="Description - Donnez le plus de détails possible sur votre produit">
                                                     </textarea>
                                                    </div>
                                                    @error('detail_produit')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <!--end form-group-->

                                                <!--end form-group-->
                                                <div class="form-group mb-0 row">
                                                    <div class="col-12 mt-2"><button
                                                            class="btn btn-primary btn-block waves-effect waves-light"
                                                            type="submit">Enregistrer<i
                                                                class="fas fa-sign-in-alt ml-1"></i></button>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end form-group-->
                                            </form>
                                        </div>
                                    </div>
                                    <!--end card-body-->
                                    <div class="card-body bg-light-alt text-center">
                                        <span class="text-muted d-none d-sm-inline-block">As Technologies © 2023
                                        </span>
                                    </div>
                                </div>
                                <!--end modal-body-->
                            </div>
                            <!--end modal-content-->
                        </div>
                        <!--end modal-dialog-->
                    </div>
                    <!--end modal-->

                </div>
            </div>
            <!--end card-header-->


            <div class="card-body">
                <table id="datatable" class="table table-bordered dt-responsive"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th>Photos</th>
                            <th>Nom</th>
                            <th>Prix(FCFA)</th>
                            <th>catégories</th>
                            <th>Marque</th>
                            <th>Résume</th>
                            <th style="max-width: 120px !important">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($produits)
                            @foreach($produits as $produit)
                                <tr>
                                    <td scope="col">{{ $produit->id }}</td>
                                    <td><img class="img-fluid round-10" src="/ProduitsImage/{{ $produit->photos }}"
                                            width="145px">
                                    </td>
                                    <th>{{ $produit->nom_produit }}</th>
                                    <th>{{ $produit->prix }}</th>
                                    <th>{{ $produit->categorie->designation }}</th>
                                    <th>{{ $produit->marque->designation  ?? '' }}</th>
                                    <th>{!!$produit->resume_produit!!}</th>
                                    <td>
                                        <form id="form-{{$produit->id}}"
                                             action="{{ url('delete/produit', $produit->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('DELETE')

                                            <a class="btn btn-sm btn-soft-info btn-circle mr-2" href="#!"
                                                data-target="#exampleModalLarge_{{ $produit->id }}" data-toggle="modal"><i
                                                    class="fa fa-eye" title="détail" style="color:blue"></i></a>
                                            <a class="btn btn-sm btn-soft-primary btn-circle mr-2" href="#!"
                                                data-target="#modal_{{ $produit->id }}" data-toggle="modal"><i
                                                    class="dripicons-pencil" title="modifier le produit"
                                                    style="color: orange"></i></a>
                                            <button class="btn btn-sm btn-soft-danger btn-circle mr-2" href=""><i
                                                    class="dripicons-trash" title="supprimer" aria-hidden="true"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div><!-- end col -->
</div><!-- end row -->

<section>
    @if($produits)
        @foreach($produits as $produit)
            <div class="modal fade" id="modal_{{ $produit->id }}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalDefaultLogin" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <!--end modal-header-->
                        <div class="modal-body">
                            <div class="card-body p-0 auth-header-box">
                                <div class="text-center p-3">
                                    <h4 style="color: red" class="mt-3 mb-1 font-weight-semibold font-18">
                                        Mettre à jour les informations du produit !</h4>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active p-3 pt-3" id="LogIn_Tab" role="tabpanel">
                                    <form class="form-horizontal auth-form my-4" method="POST"
                                        action="{{ url('produit/update', $produit->id) }}"
                                        enctype="multipart/form-data">
                                        @csrf

                                        @method('PUT')
                                        <input type="hidden" name="_method" value="put">
                                        <!--end form-group-->
                                        <div class="form-group"><label style="color:#6374ff; font-weight: bolder;"  for="nom_produit">Nom</label>
                                            <div class="input-group mb-3"><input type="text" class="form-control"
                                                    name="nom_produit" id="nom_produit" 
                                                    value="{{  $produit->nom_produit }}" 
                                                    placeholder="Ajouter le nom du produit">
                                            </div>
                                            @error('nom_produit')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <!--end form-group-->
                                    <div class="form-group mb-2"><label style="color:#6374ff; font-weight: bolder"    for="categorie_id">Catégorie
                                        </label>
                                        {{ (old('categorie')) }}
                                        <select class="form-select form-control" name="categorie_id" id="categorie_id">
                                            <option value="Choisir la Catégorie">Choisir la catégorie
                                            </option>
                                            @if(!is_null($categories))
                                                @foreach($categories  as $categorie)
                                                    <option value="{{ $categorie->id }}" 
                                                        @if((int) $produit->categorie_id == (int)$categorie->id) selected
                                                        @endif>{{ $categorie->designation }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                        @error('categorie_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror


                                        <div class="form-group mb-2"><label style="color:#6374ff; font-weight: bolder"    for="marque_id">Marque
                                        </label>
                                        {{ (old('marque')) }}
                                        <select class="form-select form-control" name="marque_id" id="marque_id">
                                            <option value="Choisir la marque">Choisir la marque
                                            </option>
                                            @if(!is_null($marques))
                                                @foreach($marques  as $marque)
                                                    <option value="{{ $marque->id }}" 
                                                        @if((int) $produit->marque_id == (int)$marque->id) selected
                                                        @endif>{{ $marque->designation }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                        @error('marque_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                        <div class="form-group"><label style="color:#6374ff; font-weight: bolder;"   for="prix">Prix</label>
                                            <div class="input-group mb-3"><input type="number" class="form-control"
                                                    name="prix" id="prix" value="{{ $produit->prix }}"
                                                     placeholder="FCFA">
                                            </div>
                                            @error('prix')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label style="color:#6374ff; font-weight: bolder;"   for="photos">Photos
                                            </label>
                                            <div class="custom-file"><input type="file"
                                                    value="{{ old('photos') }}"
                                                    class="custom-file-input" id="validatedCustomFile" name="photos"
                                                    ><label class="custom-file-label"
                                                    for="validatedCustomFile">Choisir la photo du produit
                                                </label><br><br>
                                                <img class="img-fluid round-10" src="/ProduitsImage/{{ $produit->photos }}" width="145px">
                                            </div>
                                            @error('photos')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div><br><br>

                                        <div class="form-group">
                                            <label style="color:#6374ff; font-weight: bolder;" for="resume_produit">Résumé
                                            </label>
                                            <div class="input-group mb-3">
                                                <textarea class="form-control" rows="5" id="resume_produit"
                                                    name="resume_produit" placeholder="">
                                                            {!! $produit->resume_produit !!} 
                                                     </textarea>
                                            </div>
                                            @error('resume_produit')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group">
                                            <label style="color:#6374ff; font-weight: bolder;"  for="detail_produit">Description
                                                détaillée</label>
                                            <div class="input-group mb-3">
                                                <textarea class="form-control summernote" rows="5" id="detail_produit"
                                                    name="detail_produit"
                                                    placeholder="Description - Donnez le plus de détails possible sur votre produit">{!! $produit->detail_produit !!}
                                                </textarea>
                                            </div>
                                            @error('detail_produit')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-0 row">
                                            <div class="col-12 mt-2"><button
                                                    class="btn btn-primary btn-block waves-effect waves-light"
                                                    type="submit">Mettre à jour<i
                                                        class="fas fa-sign-in-alt ml-1"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!--end card-body-->
                            <div class="card-body bg-light-alt text-center">
                                <span class="text-muted d-none d-sm-inline-block">As Technologies © 2023
                                </span>
                            </div>
                        </div>
                        <!--end modal-body-->
                    </div>
                    <!--end modal-content-->
                </div>
                <!--end modal-dialog-->
            </div>
            <!--end modal-->
            </div>
        @endforeach
    @endif
</section>

<section>
@if(!is_null($produits))
@foreach($produits as $produit)
        <!--modal-->
        <div class="modal fade bd-example-modal-lg" id="exampleModalLarge_{{ $produit->id }}" tabindex="-1"
role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h6 class="modal-title m-0" id="myLargeModalLabel">Voir les détails du Produits</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i
                        class="la la-times"></i></span></button>
        </div>
        <!--end modal-header-->
        <div class="modal-body">
            <div class="row">
                <div class="col-lg-6 text-center">
                    <h3 class="ml-3" style="font-size: 15px;">Photo :   <br><br>
                        <img src="/ProduitsImage/{{ $produit->photos }}" class="img-fluid" width="auto">
                    </h3>
                </div> <br><br>
                <div class="col-lg-6 text-center">
                    <div class="error-content">
                        <p class="ml-3" style="font-size: 15px;">
                            Description: <br><br> {!!$produit->detail_produit!!}</p>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
        <!--end modal-body-->
        <div class="modal-footer"><button type="button" class="btn btn-danger btn-sm"
                data-dismiss="modal">Fermer</button>
        </div>
        <!--end modal-footer-->
    </div>
    <!--end modal-content-->
</div>
<!--end modal-dialog-->
</div>
<!--end modal-->
@endforeach
@endif
</section> 

@endsection