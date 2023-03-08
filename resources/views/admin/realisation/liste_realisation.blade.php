@extends('layouts.admin_master')
@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row">
                <div class="col">
                    <h4 class="page-title">Nos réalisations</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Réalisations</li>
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
                        data-target="#exampleModalLogin">Ajouter une réalisation</button>
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
                                                action="{{ route('store.realisation') }}"
                                                enctype="multipart/form-data">
                                                @csrf

                                                <div class="form-group"><label for="photo_realisation">Photo</label>
                                                    <div class="custom-file"><input type="file"
                                                            value="{{ old('photo_realisation') }}"
                                                            class="custom-file-input" id="validatedCustomFile"
                                                            name="photo_realisation" required=""><label
                                                            class="custom-file-label" for="validatedCustomFile">Choisir
                                                            l'image de la réalisation
                                                        </label>
                                                    </div>
                                                    @error('photo_realisation')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <!--end form-group-->
                                                <div class="form-group"><label for="libelle">Resumé de la réalisation</label>
                                                    <div class="input-group mb-3"><input type="text"
                                                            class="form-control" name="libelle" id="libelle"
                                                            value="{{ old('libelle') }}"
                                                            placeholder="Resumé">
                                                    </div>
                                                    @error('libelle')
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
                            <th>Libelle</th>
                            <th>Image de la réalisation</th>
                            <th style="max-width: 120px !important">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!is_null($realisations))
                            @foreach($realisations as $realisation)
                                <tr>
                                    <td scope="col">{{ $realisation->id }}</td>
                                    <td>{{ $realisation->libelle }}</td>
                                    <td><img src="/ServiceImage/{{ $realisation->photo_realisation }}" width="100px">
                                    </td>
                                    <td>
                                        <form id="form-{{$realisation->id}}"
                                            action="{{ route('delete.realisation', $realisation->id) }}"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('DELETE')

                                            <a class="btn btn-sm btn-soft-info btn-circle mr-2"
                                                href="#!" data-target="#exampleModalLarge_{{ $realisation->id }}" data-toggle="modal"><i class="fa fa-eye" title="détail" style="color:blue"></i></a>
                                            <a class="btn btn-sm btn-soft-primary btn-circle mr-2" href="#!"
                                                data-target="#modal_{{ $realisation->id }}"
                                                data-toggle="modal"><i class="dripicons-pencil" title="modifier" style="color: orange"></i></a>
                                            <button class="btn btn-sm btn-soft-danger btn-circle mr-2" href=""><i class="dripicons-trash" title="supprimer" aria-hidden="true"></i>
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
        <!--modal-->
        @if($realisations != null)
        @foreach($realisations as $realisation)
            <div class="modal fade" id="modal_{{ $realisation->id }}"  tabindex="-1" role="dialog"
                aria-labelledby="exampleModalDefaultLogin" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <!--end modal-header-->
                        <div class="modal-body">
                            <div class="card-body p-0 auth-header-box">
                                <div class="text-center p-3">
                                    <h4 style="color: red" class="mt-3 mb-1 font-weight-semibold font-18">
                                        Vous pouvez mettre à jour!</h4>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active p-3 pt-3" id="LogIn_Tab" role="tabpanel">
                                    <form class="form-horizontal auth-form my-4" method="POST"
                                        action="{{ route('realisation.update', $realisation->id) }}"
                                        enctype="multipart/form-data">
                                        @csrf
        
                                        @method('PUT')
                                        <input type="hidden" name="_method" value="put">

                                        <div class="form-group"><label for="photo_realisation">Photo</label>
                                            <div class="custom-file"><input type="file"
                                                    value="{{ old('photo_realisation') }}"
                                                    class="custom-file-input" id="validatedCustomFile"
                                                    name="photo_realisation"><label
                                                    class="custom-file-label" for="validatedCustomFile">Choisir
                                                    l'image de la réalisation
                                                </label> <br><br>
                                                <img src="/ServiceImage/{{ $realisation->photo_realisation }}" width="100px">
                                            </div>
                                            @error('photo_realisation')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <!--end form-group-->
                                        <div class="form-group"><label for="libelle">Nom de la
                                                réalisation</label>
                                            <div class="input-group mb-3"><input type="text"
                                                    class="form-control" name="libelle" id="libelle"
                                                    value="{{ $realisation->libelle }}" name="libelle" id="libelle"
                                                    value="{{ old('libelle') }}"
                                                    placeholder="Veuillez saisir le nom ">
                                            </div>
                                            @error('libelle')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <!--end form-group-->

                                        <!--end form-group-->
                                        <div class="form-group mb-0 row">
                                            <div class="col-12 mt-2"><button
                                                    class="btn btn-primary btn-block waves-effect waves-light"
                                                    type="submit">Enregistrer<i class="fas fa-sign-in-alt ml-1"></i></button>
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
    @endforeach
    @endif
</section>

<section>
    @if($realisations != null)
    @foreach($realisations as $realisation)
        <!--modal-->
        <div class="modal fade bd-example-modal-lg" id="exampleModalLarge_{{ $realisation->id }}" tabindex="-1"
        role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title m-0" id="myLargeModalLabel">{{ $realisation->libelle}}</h6>
                    <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close"><span aria-hidden="true"><i
                                class="la la-times"></i></span></button>
                </div>
                <!--end modal-header-->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-4 text-center">
                            <h3 class="ml-3" style="font-size: 15px; color:blue">Photo de la réalisation: <img src="/ServiceImage/{{ $realisation->photo_realisation }}" class="img-fluid" width="auto">
                            </h3>
                        </div>
                        <div class="col-lg-4 text-center">
                            <div class="error-content text-center">
                                <h3 class="ml-3" style="font-size: 15px; color:blue">Nom : {{$realisation->libelle}}</h3>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
                <!--end modal-body-->
                <div class="modal-footer"><button type="button"
                        class="btn btn-secondary btn-sm" data-dismiss="modal">Fermer</button>
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