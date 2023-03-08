@extends('layouts.admin_master')
@section('content')
<!-- Page Content-->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row">
                <div class="col">
                    <h4 class="page-title">Nos clients</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Clients & Partenaires</li>
                    </ol>
                </div>
                <!--end col-->
                <div class="col-auto align-self-center"><a href="#"
                        class="btn btn-sm btn-outline-primary" id="Dash_Date"><span class="day-name"
                            id="Day_Name">Today:</span>&nbsp; <span class="" id="Select_date">Jan
                            11</span> <i data-feather="calendar"
                            class="align-self-center icon-xs ml-1"></i> </a><a href="#"
                        class="btn btn-sm btn-outline-primary"><i data-feather="download"
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
            <div class="col-12">
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
                                data-target="#exampleModalLogin">Ajouter un client</button>
                            <!--modal-->
                            <div class="modal fade" id="exampleModalLogin" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalDefaultLogin" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <!--end modal-header-->
                                        <div class="modal-body">
                                            <div class="card-body p-0 auth-header-box">
                                                <div class="text-center p-3">
                                                    <h4 style="color: red"
                                                        class="mt-3 mb-1 font-weight-semibold font-18">Veuillez remplir ces champs svp !</h4>
                                                </div>
                                            </div>
                                            <div class="tab-content">
                                                <div class="tab-pane active p-3 pt-3" id="LogIn_Tab" role="tabpanel">
                                                    <div class="card-body">
                                                        <form action="{{ route('store.client') }}"
                                                            method="POST" enctype="multipart/form-data">
                                                            @csrf

                                                            <div class="form-group"><label for="logo_client">Logo
                                                                    client</label>
                                                                <div class="custom-file"><input type="file"
                                                                        value="{{ old('logo_client') }}"
                                                                        class="custom-file-input"
                                                                        id="validatedCustomFile"
                                                                        name="logo_client"><label
                                                                        class="custom-file-label"
                                                                        for="validatedCustomFile">Choisir le logo du
                                                                        client</label>
                                                                </div>
                                                                @error('logo_client')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group"><label
                                                                    for="exampleInputPassword1">Nom du
                                                                    client</label><input type="text"
                                                                    class="form-control"
                                                                    value="{{ old('nom_client') }}"
                                                                    name="nom_client" id="exampleInputPassword1"
                                                                    placeholder="Veuillez saisir le nom du client"
                                                                    required>
                                                            </div>
                                                            @error('nom_client')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror

                                                            <div class="form-group"><label
                                                                    for="exampleInputPassword1">Secteur d'activité du
                                                                    client</label> <input type="text"
                                                                    class="form-control" name="secteur_activity"
                                                                    id="exampleInputPassword1"
                                                                    placeholder="Veuillez saisir le secteur d'activité du client">
                                                            </div>
                                                            @error('secteur_activity')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror

                                                            <div class="form-group">
                                                                <label for="temoignage">Témoignage du client</label>
                                                                <textarea class="form-control" rows="5" id="temoignage"
                                                                    name="temoignage" placeholder="">
                                                                 </textarea>
                                                            </div>

                                                            @error('temoignage')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror

                                                    </div><button type="submit"
                                                        class="btn btn-primary">Enregistrer</button> <button
                                                        type="button" class="btn btn-danger">Annuler</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end card-body-->

                                    </div>
                                    <!--end modal-body-->
                                </div>
                                <!--end modal-content-->
                            </div>
                            <!--end modal-dialog-->
                        </div>
                        <!--end modal-->
                    </div>
                    <!--end card-header-->
                    <div class="card-body">
                        <table id="datatable" class="table table-bordered dt-responsive"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th>Nom client</th>
                                    <th>Secteur activité</th>
                                    <th>logo client</th>
                                    <th>Témoignage</th>
                                    <th style="max-width: 120px !important">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!is_null($clients))
                                    @foreach($clients as $client)
                                        <tr>
                                            <td scope="col">{{ $client->id }}</td>
                                            <td>{{ $client->nom_client }}</td>
                                            <td>{{ $client->secteur_activity }}</td>
                                            <td><img src="/ServiceImage/{{ $client->logo_client }}" width="50px"
                                                    class="img-fluid"></td>
                                            <td> {!!$client->temoignage!!}</td>
                                            <td name="buttons">
                                                <form id="form-{{ $client->id }}"
                                                    action="{{ route('delete.client', $client->id) }}"
                                                    method="POST" enctype="multipart/form-data">

                                                    @csrf
                                                    @method('DELETE')

                                                    <a class="btn btn-sm btn-soft-info btn-circle mr-2" href="#!"
                                                        data-target="#exampleModalLarge" data-toggle="modal"><i
                                                            class="fa fa-eye" title="voir" style="color:blue"></i></a>
                                                    <button class="btn btn-sm btn-soft-danger btn-circle mr-2">
                                                        <a class="" href="#!" data-target="#modal_{{ $client->id }}"
                                                            data-toggle="modal"><i class="dripicons-pencil"
                                                                title="modifier"></i>
                                                        </a>
                                                    </button>

                                                    <button class="btn btn-sm btn-soft-danger btn-circle mr-2"
                                                        href=""><i class="dripicons-trash" title="supprimer"
                                                            aria-hidden="true"></i></button>
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
            @if(!is_null($clients))
                @foreach($clients as $client)
                        <!--modal-->
                        <div class="modal fade" id="modal_{{ $client->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalDefaultLogin" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <!--end modal-header-->
                                    <div class="modal-body">
                                        <div class="card-body p-0 auth-header-box">
                                            <div class="text-center p-3">
                                                <h4 style="color: red" class="mt-3 mb-1 font-weight-semibold font-18">
                                                    Mettre à jour les informations du clients !</h4>
                                            </div>
                                        </div>
                                        <div class="tab-content">
                                            <div class="tab-pane active p-3 pt-3" id="LogIn_Tab" role="tabpanel">
                                                <div class="card-body">
                                                    <form action="{{ route('client.update', $client->id) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <input type="hidden" name="_method" value="put">

                                                        <div class="form-group"><label for="logo_client">Logo
                                                                client</label>
                                                            <div class="custom-file"><input type="file"
                                                                    value="{{ old('logo_client') }}"
                                                                    class="custom-file-input" id="validatedCustomFile"
                                                                    name="logo_client"><label class="custom-file-label"
                                                                    for="validatedCustomFile">Choisir le logo du
                                                                    client</label>
                                                                <img src="/ServiceImage/{{ $client->logo_client }}"
                                                                    width="50px" class="img-fluid center">
                                                            </div>
                                                            @error('logo_client')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div> <br>

                                                        <div class="form-group"><label for="exampleInputPassword1">Nom
                                                                du client</label><input type="text" class="form-control"
                                                                value="{{ old('nom_client') }}"
                                                                value="{{ $client->nom_client }}" name="nom_client"
                                                                id="exampleInputPassword1"
                                                                placeholder="Vouspouvez mettre à jour le nom">
                                                        </div>
                                                        @error('nom_client')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror

                                                        <div class="form-group"><label
                                                                for="exampleInputPassword1">Secteur
                                                                d'activité du
                                                                client</label> <input type="text" class="form-control"
                                                                name="secteur_activity" id="exampleInputPassword1"
                                                                value="{{ $client->secteur_activity }}"
                                                                placeholder="Veuillez saisir le secteur d'activité du client">
                                                        </div>
                                                        @error('secteur_activity')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror

                                                        <div class="form-group">
                                                            <label for="temoignage">Témoignage du client</label>
                                                            <textarea class="form-control" rows="5" id="temoignage"
                                                                name="temoignage" placeholder="">{{ $client->temoignage }}
                                                            </textarea>
                                                        </div>

                                                        @error('temoignage')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror

                                                </div><button type="submit" class="btn btn-primary">Mettre à
                                                    jour</button>
                                                <button type="submit" class="btn btn-danger">Annuler</button>
                                                </form>
                                            </div>
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
                @endforeach
            @endif
        </section>

    </div>

@endsection