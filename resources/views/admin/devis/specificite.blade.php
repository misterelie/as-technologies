@extends('layouts.admin_master')
@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row">
                <div class="col">
                    <h4 class="page-title">Liste des spécificités</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">spécificités</li>
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
        </div>

        <div class="card">
            <div class="card-header">
                <div class="card-body"><button type="button" class="btn btn-outline-primary" data-toggle="modal"
                        data-target="#exampleModalLogin">Ajouter une spécificité</button>
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
                                                action="{{ route('store.specificite') }}"
                                                enctype="multipart/form-data">
                                                @csrf

                                                <!--end form-group-->
                                                <div class="form-group mb-2"><label for="specifite_service">Nom de la
                                                        Specifité</label>
                                                    <div class="input-group mb-3"><input type="text"
                                                            class="form-control" name="specifite_service"
                                                            id="specifite_service"
                                                            value="{{ old('specifite_service') }}"
                                                            placeholder="Ajouter une spécificité">
                                                    </div>
                                                    @error('specifite_service')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <!--end form-group-->

                                                <div class="form-group mb-2"><label for="photo_realisation">Sélectionnez
                                                        le service</label>
                                                    {{ (old('service')) }}
                                                    <select class="form-select form-control" name="service_id"
                                                        id="service_id" required>
                                                        <option value="Veuillez choisir le service">Veuillez choisir le
                                                            service</option>
                                                        @if(!is_null($services))
                                                            @foreach($services as $service)
                                                                <option value="{{ $service->id }}"
                                                                    {{ !is_null(old("service")) ? 'selected' : '' }}>
                                                                    {{ Str::ucfirst($service->libelle) }}
                                                                </option>
                                                            @endforeach
                                                        @endif

                                                    </select>
                                                </div>
                                                @error('service_id')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                        </div>
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
                            <th>Spécificité</th>
                            <th>Services</th>
                            <th style="max-width: 120px !important">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!is_null($specificites))
                            @foreach($specificites as $specificite)
                                <tr>
                                    <td scope="col">{{ $specificite->id }}</td>
                                    <td>{{ $specificite->specifite_service }}</td>
                                    <td>{{ $specificite->service->libelle }}</td>
                                    <td>
                                        <form id="form-{{ $specificite->id }}"
                                            action="{{ url('delete/specificite', $specificite->id) }}"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('DELETE')

                                            <a class="btn btn-sm btn-soft-primary btn-circle mr-2" href="#!"
                                                data-target="#modal_{{ $specificite->id }}" data-toggle="modal"><i
                                                    class="dripicons-pencil" title="modifier" style="color: orange"></i>
                                            </a>
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
    <!--modal-->
    @if(!is_null($specificites))
        @foreach($specificites as $specificite)
            <div class="modal fade" id="modal_{{ $specificite->id }}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalDefaultLogin" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <!--end modal-header-->
                        <div class="modal-body">
                            <div class="card-body p-0 auth-header-box">
                                <div class="text-center p-3">
                                    <h4 style="color: red" class="mt-3 mb-1 font-weight-semibold font-18">
                                        Vous pouvez mettre à jour la spécificité</h4>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active p-3 pt-3" id="LogIn_Tab" role="tabpanel">
                                    <form class="form-horizontal auth-form my-4" method="POST"
                                        action="{{ route('update.specificite', $specificite->id) }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="_method" value="put">

                                        <div class="form-group"><label for="specifite_service">Nom de la
                                                Specifité</label>
                                            <div class="input-group mb-3"><input type="text" class="form-control"
                                                    name="specifite_service" id="specifite_service"
                                                    value="{{ $specificite->specifite_service }}">
                                            </div>
                                        </div>

                                        <div class="form-group mb-2"><label for="photo_realisation">Sélectionnez le
                                                service
                                            </label>
                                            {{ (old('service')) }}
                                            <select class="form-select form-control" name="service_id" id="service_id">
                                                <option value="Veuillez choisir le service">Choisir un nouveau service
                                                </option>
                                                @if(!is_null($services))
                                                    @foreach($services  as $service)
                                                        <option value="{{ $service->id }}" 
                                                        @if((int) $specificite->service_id == (int)$service->id) selected
                                                            @endif>{{ $service->libelle }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
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
@endsection