@extends('layouts.admin_master')
@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row">
                <div class="col">
                    <h4 class="page-title">Liste des projets</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Projets</li>
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
                        data-target="#exampleModalLogin">Ajouter un projet</button>
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
                                                action="{{ route('store.projet') }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <!--end form-group-->
                                                <div class="form-group"><label for="titre">Titre</label>
                                                    <div class="input-group mb-3"><input type="text"
                                                            class="form-control" name="titre" id="titre"
                                                            value="{{ old('titre') }}"
                                                            placeholder="titre">
                                                    </div>
                                                    @error('titre')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <!--end form-group-->
                                                <div class="form-group">
                                                    <label for="description">Section Description</label>
                                                    <textarea class="form-control" rows="5" id="description"
                                                        name="description" placeholder="">
                                                     </textarea>
                                                </div>

                                                @error('description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
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
                            <th>Titre</th>
                            <th>Description</th>
                            <th style="max-width: 120px !important">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!is_null($projets))
                            @foreach($projets as $projet)
                                <tr>
                                    <td scope="col">{{ $projet->id }}</td>
                                    <td>{{ $projet->titre }}</td>
                                    <td>{!!$projet->description !!}</td>
                                    <td>
                                        <form id="form-{{$projet->id}}" 
                                            action="{{ route('delete.projet', $projet->id) }}"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('DELETE')

                                            <a class="btn btn-sm btn-soft-info btn-circle mr-2" href="#!"
                                                data-target="#exampleModalLarge_{{ $projet->id }}" data-toggle="modal"><i
                                                    class="fa fa-eye" title="détail" style="color:blue"></i></a>
                                            <a class="btn btn-sm btn-soft-primary btn-circle mr-2" href="#!"
                                                data-target="#modal_{{ $projet->id }}" data-toggle="modal"><i
                                                    class="dripicons-pencil" title="modifier"
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
    <!--modal-->
    @if($projets != null)
        @foreach($projets as $projet)
            <div class="modal fade" id="modal_{{ $projet->id }}" tabindex="-1" role="dialog"
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
                                        action="{{ route('projet.update', $projet->id) }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="_method" value="put">

                                        <div class="form-group"><label for="titre">Titre</label>
                                            <div class="input-group mb-3"><input type="text" class="form-control"
                                                    name="titre" id="titre" value="{{ $projet->titre }}"
                                                    placeholder="titre">
                                            </div>
                                            @error('titre')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Section Description</label>
                                            <textarea class="form-control" rows="5" id="description" name="description"
                                                placeholder="">{{ $projet->description }}"
                                             </textarea>

                                        </div>
                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

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
    @if(!is_null($projets))
        @foreach($projets as $projet)
            <!--modal-->
            <div class="modal fade bd-example-modal-lg" id="exampleModalLarge_{{ $projet->id }}" tabindex="-1"
                role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title m-0" id="myLargeModalLabel"></h6>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true"><i class="la la-times"></i></span></button>
                        </div>
                        <!--end modal-header-->
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-6 text-center">
                                    <div class="error-content text-center">
                                        <h4 class="ml-3" style="font-size: 12px">
                                        <span style="font-weight: bold; font-size: 15px">Titre</span>: <br>
                                            {{ $projet->titre }}
                                        </h4>
                                    </div>
                                </div>
                                <div class="col-lg-6 text-center">
                                    <div class="error-content text-center"> 
                                        <h4 class="ml-3" style="font-size: 12px">
                                            <span style="font-weight: bold; font-size: 15px">Description</span>: <br>
                                                {{ $projet->description }}
                                            </h4>
                                    </div>
                                </div>
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
@endsection