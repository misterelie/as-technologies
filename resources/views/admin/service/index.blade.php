@extends('layouts.admin_master')
@section('content')

<div class="row">
    <div class="col-sm-12 ">
        <div class="page-title-box">
            <div class="row ">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="row">
                            <div class="col">
                                <h4 class="page-title">LISTE DES SERVICES</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0);">Table</a></li>
                                    <li class="breadcrumb-item active">Service</li>
                                </ol>
                            </div>
                            <!--end col-->
                            <div class="col-auto align-self-center"><a href="#" class="btn btn-sm btn-outline-primary"
                                    id="Dash_Date"><span class="day-name" id="Day_Name">Today:</span>&nbsp; <span
                                        class="" id="Select_date">Jan
                                        11</span> <i data-feather="calendar" class="align-self-center icon-xs ml-1"></i>
                                </a><a href="#" class="btn btn-sm btn-outline-primary"><i data-feather="download"
                                        class="align-self-center icon-xs"></i></a></div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end page-title-box-->
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

<!-- end page title end breadcrumb -->
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
                        data-target="#exampleModalLogin">Ajouter un service</button>
                    <!--modal-->
                    <div class="modal fade bd-example-modal-lg" id="exampleModalLogin" tabindex="-1" role="dialog"
                        aria-labelledby="modal-dialog modal-lg" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
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
                                            <form class="form-horizontal auth-form my-4" method="post"
                                                action="{{ route('store.service') }}"
                                                enctype="multipart/form-data">
                                                @csrf

                                                <div class="form-group"><label for="image_service">Photo</label>
                                                    <div class="custom-file"><input type="file"
                                                            value="{{ old('image_service') }}"
                                                            class="custom-file-input" id="validatedCustomFile"
                                                            name="image_service" required=""><label
                                                            class="custom-file-label" for="validatedCustomFile">Choisir
                                                            l'image du
                                                            service</label>
                                                    </div>
                                                    @error('image_service')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <!--end form-group-->
                                                <div class="form-group"><label for="libelle">Nom du
                                                        service</label>
                                                    <div class="input-group mb-3"><input type="text"
                                                            class="form-control" name="libelle" id="libelle"
                                                            value="{{ old('libelle') }}"
                                                            placeholder="Veuillez saisir le nom ">
                                                    </div>
                                                    @error('libelle')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <!--end form-group-->
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group"><label for="resume">Resumé</label>
                                                            <textarea class="form-control" rows="5" id="resume"
                                                                name="resume" placeholder="">
                                                                </textarea> <br><br>
                                                        </div>
                                                        @error('resume')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group"><label for="detail">Les détails du service: </label>
                                                            <textarea class="form-control summernote" rows="5" id="summernote"
                                                                name="detail" placeholder="">
                                                            </textarea>
                                                        </div>
                                                        @error('detail')
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!--end form-group-->
                                                <div class="form-group mb-0 row">
                                                    <div class="col-12 mt-2"><button
                                                            class="btn btn-primary btn-block waves-effect waves-light" type="submit">Enregistrer<i
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
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered dt-responsive"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th>Photo</th>
                                <th>Libelle</th>
                                <th>Resumé</th>
                                <th>Détail du service</th>
                                <th style="max-width: 120px !important">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!is_null($services))
                                @foreach($services as $service)
                                    <tr>
                                        <td scope="col">{{ $service->id }}</td>
                                        <td><img src="/ServiceImage/{{ $service->image_service }}" width="45px">
                                        </td>
                                        <td>{{ $service->libelle }}</td>
                                        <td>{!! $service->resume !!}</td>
                                        <td>{!! $service->detail !!}</td>
                                        <td>
                                            <form id="form-{{ $service->id }}"
                                                action="{{ route('delete.service', $service->id) }}"
                                                method="POST" enctype="multipart/form-data">

                                                @csrf
                                                @method('DELETE')

                                                <a class="btn btn-sm btn-soft-info btn-circle mr-2" href="#!"
                                                    data-target="#exampleModalLarge_{{ $service->id }}"
                                                    data-toggle="modal"><i class="fa fa-eye" title="voir"
                                                        style="color:blue"></i></a>
                                                <a class="btn btn-sm btn-soft-primary btn-circle mr-2" href="#"
                                                    data-target="#modal_{{ $service->id }}" data-toggle="modal"><i
                                                        class="dripicons-pencil" title="modifier"
                                                        style="color: orange"></i></a>
                                                <button class="btn btn-sm btn-soft-danger btn-circle mr-2" href=""><i
                                                        class="dripicons-trash" title="supprimer"
                                                        aria-hidden="true"></i>
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
        </div>
    </div><!-- end col -->
</div>

<section>
    @if(!is_null($services))
        @foreach($services as $service)
            <!--modal-->
            <div class="modal fade bd-example-modal-lg" id="modal_{{ $service->id }}" tabindex="-1" role="dialog"
                aria-labelledby="modal-dialog modal-lg" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <!--end modal-header-->
                        <div class="modal-body">
                            <div class="card-body p-0 auth-header-box">
                                <div class="text-center p-3">
                                    <h4 style="color: red" class="mt-3 mb-1 font-weight-semibold font-18">Mettre à jour les informations du service !</h4>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active p-3 pt-3" id="LogIn_Tab" role="tabpanel">
                                    <form class="form-horizontal auth-form my-4" method="post"
                                        action="{{ route('service.update', $service->id) }}"
                                        enctype="multipart/form-data">
                                        @csrf

                                        @method('PUT')
                                        <input type="hidden" name="_method" value="put">

                                        <div class="form-group"><label for="image_service">Photo</label>
                                            <div class="custom-file"><input type="file"
                                                    value="{{ old('image_service') }}"
                                                    class="custom-file-input" id="" name="image_service"><label
                                                    class="custom-file-label" for="">Choisir l'image du
                                                    service</label><br><br>
                                                <img src="/ServiceImage/{{ $service->image_service }}" width="70px"
                                                    class="img-fluid">
                                            </div>
                                        </div><br>

                                        <!--end form-group-->
                                        <div class="form-group"><label for="libelle">Nom du service</label>
                                            <div class="input-group mb-3"><input type="text" class="form-control"
                                                    value="{{ $service->libelle }}" name="libelle" id="libelle"
                                                    value="{{ old('libelle') }}"
                                                    placeholder="Veuillez saisir le nom ">
                                            </div>
                                            @error('libelle')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <!--end form-group-->

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group"><label for="resume">
                                                        Saisir une petite description</label>
                                                    <textarea class="form-control" rows="5" id="resume" name="resume"
                                                        placeholder="">{{ $service->resume }} 
                                                </textarea>
                                                </div>
                                                @error('resume')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group"><label for="resume">Détail</label>
                                                    <textarea class="form-control summernote" rows="5" id="detail" name="detail"
                                                        placeholder="">{{ $service->detail }} 
                                                </textarea>
                                                </div>
                                                @error('detail')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
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
                <!--end modal-dialog-->
            </div>
            <!--end modal-->
        @endforeach
    @endif
</section>

<section>
    @if(!is_null($services))
        @foreach($services as $service)
            <!--modal-->
            <div class="modal fade bd-example-modal-lg" id="exampleModalLarge_{{ $service->id }}" tabindex="-1"
                role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title m-0" id="myLargeModalLabel">{{ $service->libelle }}</h6>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true"><i class="la la-times"></i></span></button>
                        </div>
                        <!--end modal-header-->
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-4 text-center">
                                    <img src="/ServiceImage/{{ $service->image_service }}" class="mg-fluid"
                                        width="280px">
                                </div>
                                <!--end col-->
                                <div class="col-lg-8 align-self-center">
                                    <div class="error-content text-center">
                                        <h4 class="ml-3">{{ $service->resume }}</h4>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end modal-body-->
                        <div class="modal-footer"><button type="button" class="btn btn-secondary btn-sm"
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

@yield('js')
@endsection