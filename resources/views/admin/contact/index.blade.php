@extends('layouts.admin_master')
@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row">
                <div class="col">
                    <h4 class="page-title">Nos contacts</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Contacts</li>
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
                <div class="card-body">
                    {{-- <button type="button" class="btn btn-outline-primary" data-toggle="modal"
                        data-target="#exampleModalLogin">Ajouter les contacts
                    </button> --}}
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
                                                action="{{ route('store.contact') }}"
                                                enctype="multipart/form-data">
                                                @csrf

                                                <!--form-group email-->
                                                <div class="form-group"><label for="libelle">Email
                                                    </label>
                                                    <div class="input-group mb-3"><input type="email"
                                                            class="form-control" name="email" id="email"
                                                            value="{{ old('email') }}"
                                                            placeholder="Veuillez saisir l'email">
                                                    </div>
                                                    @error('email')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <!--end form-group email-->

                                                <div class="form-group"><label for="adresse">Adresse
                                                    </label>
                                                    <div class="input-group mb-3"><input type="text"
                                                            class="form-control" name="adresse" id="adresse"
                                                            value="{{ old('adresse') }}"
                                                            placeholder="Veuillez saisir l'adresse">
                                                    </div>
                                                    @error('adresse')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="form-group"><label for="adresse">Téléphone
                                                    </label>
                                                    <div class="input-group mb-3"><input type="tel" class="form-control"
                                                            name="phone" id="phone"
                                                            value="{{ old('phone') }}"
                                                            placeholder="Veuillez saisir le numéro de téléphone">
                                                    </div>
                                                    @error('phone')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="form-group"><label for="facebook">Lien facebook
                                                    </label>
                                                    <div class="input-group mb-3"><input type="text"
                                                            class="form-control" name="lien_facebook" id="lien_facebook"
                                                            placeholder="Ce champ n'est pas obligation !">
                                                    </div>
                                                    @error('lien_facebook')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="form-group"><label for="lien_youtube">Lien youtube
                                                    </label>
                                                    <div class="input-group mb-3"><input type="tel" class="form-control"
                                                            name="lien_youtube" id="whatsapp"
                                                            placeholder="Ce champ n'est pas obligation !">
                                                    </div>
                                                    @error('lien_youtube')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="form-group"><label for="lien_linkedin">Lien Linkedin
                                                    </label>
                                                    <div class="input-group mb-3"><input type="type"
                                                            class="form-control" name="lien_linkedin" id="lien_linkedin"
                                                            placeholder="Ce champ n'est pas obligation !">
                                                    </div>
                                                    @error('lien_linkedin')
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
                            <th>Adresse</th>
                            <th>Email</th>
                            <th>Téléphone</th>
                            <th>Facebook</th>
                            <th>youtube</th>
                            <th>Linkedin</th>
                            <th style="max-width: 120px !important">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!is_null($adresses))
                            @foreach($adresses as $adresse)
                                <tr>
                                    <td scope="col">{{ $adresse->id }}</td>
                                    <td>{{ $adresse->adresse }}</td>
                                    <td>{{ $adresse->email }}</td>
                                    <td><i class="dripicons-phone mr-2 text-blue"></i>{{ $adresse->phone }}</td>
                                    <td>{{ $adresse->lien_facebook }}</td>
                                    <td>{{ $adresse->lien_youtube }}</td>
                                    <td>{{ $adresse->lien_linkedin }}</td>
                                    <td>
                                        <form action="" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('DELETE')

                                            <a class="btn btn-sm btn-soft-info btn-circle mr-2" href="#!"
                                                data-target="#exampleModalLarge_{{ $adresse->id }}"
                                                data-toggle="modal"><i class="fa fa-eye" title="détail"
                                                    style="color:blue"></i></a>
                                            <a class="btn btn-sm btn-soft-primary btn-circle mr-2" href="#!"
                                                data-target="#modal_{{ $adresse->id }}" data-toggle="modal"><i
                                                    class="dripicons-pencil" title="modifier"
                                                    style="color: orange"></i></a>
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
    @if($adresses != null)
        @foreach($adresses as $adresse)
            <div class="modal fade" id="modal_{{ $adresse->id }}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalDefaultLogin" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <!--end modal-header-->
                        <div class="modal-body">
                            <div class="card-body p-0 auth-header-box">
                                <div class="text-center p-3">
                                    <h4 style="color: red;" class="mt-3 mb-1 font-weight-semibold font-18">Veuillez
                                        mettre à jour les contacts !</h4>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active p-3 pt-3" id="LogIn_Tab" role="tabpanel">
                                    <form class="form-horizontal auth-form my-4" method="POST"
                                        action="{{ route('contact.update', $adresse->id) }}"
                                        enctype="multipart/form-data">
                                        @csrf

                                        @method('PUT')
                                        <input type="hidden" name="_method" value="put">

                                        <!--form-group email-->
                                        <div class="form-group"><label for="libelle">Email
                                            </label>
                                            <div class="input-group mb-3"><input type="email" class="form-control"
                                                    name="email" id="email" value="{{ $adresse->email }}"
                                                    placeholder="Veuillez saisir l'email">
                                            </div>
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <!--end form-group email-->

                                        <div class="form-group"><label for="adresse">Adresse
                                            </label>
                                            <div class="input-group mb-3"><input type="text" class="form-control"
                                                    name="adresse" id="adresse" value="{{ $adresse->adresse }}"
                                                    placeholder="Veuillez saisir l'adresse">
                                            </div>
                                            @error('adresse')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group"><label for="adresse">Téléphone
                                            </label>
                                            <div class="input-group mb-3"><input type="text" class="form-control"
                                                    name="phone" id="phone" value="{{ $adresse->phone }}"
                                                    placeholder="Veuillez saisir le numéro de téléphone">
                                            </div>
                                            @error('phone')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group"><label for="facebook">Lien facebook
                                            </label>
                                            <div class="input-group mb-3"><input type="text" class="form-control"
                                                    value="{{ $adresse->lien_facebook }}" name="lien_facebook"
                                                    id="lien_facebook"
                                                    placeholder="Vous pouvez ajouter le lien facebook">
                                            </div>
                                            @error('lien_facebook')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group"><label for="lien_youtube">Lien youtube
                                            </label>
                                            <div class="input-group mb-3"><input type="tel" class="form-control"
                                                    value="{{ $adresse->lien_youtube }}" name="lien_youtube"
                                                    id="whatsapp" placeholder="Vous pouvez ajouter le lien youtube">
                                            </div>
                                            @error('lien_youtube')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group"><label for="lien_linkedin">Lien Linkedin
                                            </label>
                                            <div class="input-group mb-3"><input type="type" class="form-control"
                                                    value="{{ $adresse->lien_linkedin }}" name="lien_linkedin"
                                                    id="lien_linkedin"
                                                    placeholder="Vous pouvez ajouter le lien linkedin">
                                            </div>
                                            @error('lien_linkedin')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-0 row">
                                            <div class="col-12 mt-2">
                                                <button
                                                    class="btn btn-primary btn-block waves-effect waves-light rounded"
                                                    type="submit">Mettre à jour<i class="fas fa-sign-in-alt ml-1"></i>
                                                </button>
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

@if($adresses != null)
    @foreach($adresses as $adresse)
        <section>
            <!--modal-->
            <div class="modal fade bd-example-modal-lg" id="exampleModalLarge_{{ $adresse->id }}" tabindex="-1"
                role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title m-0" id="myLargeModalLabel"
                                style="text-transform:uppercase; font-weight:bold">nos différents contacts</h6>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true"><i class="la la-times"></i></span></button>
                        </div>
                        <!--end modal-header-->
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="Grid_Style" role="tabpanel"
                                            aria-labelledby="pills-grid-tab">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="card client-card">
                                                        <div class="card-body text-center">
                                                            <h5 class="client-name"  style="text-transform:uppercase; font-weight:bolder">
                                                                Localisation</h5><br><span class="text-muted mr-3">
                                                                <i
                                                                    class="dripicons-location mr-2 text-blue"></i>{{ $adresse->adresse }}</span>
                                                        </div>
                                                        <!--end card-body-->
                                                    </div>
                                                    <!--end card-->
                                                </div>
                                                <!--end col-->

                                                <div class="col-lg-4">
                                                    <div class="card client-card">
                                                        <div class="card-body text-center">
                                                            <h5 class="client-name"  style="text-transform:uppercase; font-weight:bolder">
                                                                Adresse email</h5><br><span class="text-muted mr-3">
                                                                <i
                                                                    class="fa fa-envelope mr-2 text-blue"></i>{{ $adresse->email }}</span>
                                                        </div>
                                                        <!--end card-body-->
                                                    </div>
                                                    <!--end card-->
                                                </div>
                                                <!--end col-->

                                                <div class="col-lg-4">
                                                    <div class="card client-card">
                                                        <div class="card-body text-center">
                                                            <h5 class="client-name"  style="text-transform:uppercase; font-weight:bolder">
                                                                Téléphone</h5><br><span class="text-muted mr-3"><br>
                                                                <i
                                                                    class="dripicons-phone mr-2 text-blue"></i>{{ $adresse->phone }}</span>
                                                        </div>
                                                        <!--end card-body-->
                                                    </div>
                                                    <!--end card-->
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <!--end tab-pene-->

                                        <!--end tab-pene-->
                                    </div>
                                    <!--end tab-content-->
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="Grid_Style" role="tabpanel"
                                            aria-labelledby="pills-grid-tab">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="card client-card">
                                                        <div class="card-body text-center">
                                                            <h5 class="client-name"
                                                                style="text-transform:uppercase; font-weight:bolder">
                                                                Facebook</h5><br><span class="text-muted mr-3">
                                                                <i
                                                                    class=" mr-2 text-blue"></i>{{ $adresse->lien_facebook }}</span>
                                                        </div>
                                                        <!--end card-body-->
                                                    </div>
                                                    <!--end card-->
                                                </div>
                                                <!--end col-->

                                                <div class="col-lg-4">
                                                    <div class="card client-card">
                                                        <div class="card-body text-center">
                                                            <h5 class="client-name"
                                                                style="text-transform:uppercase; font-weight:bolder">
                                                                youtube</h5><br><span class="text-muted mr-3">
                                                                <i
                                                                    class=" mr-2 text-blue"></i>{{ $adresse->lien_youtube }}</span>
                                                        </div>
                                                        <!--end card-body-->
                                                    </div>
                                                    <!--end card-->
                                                </div>
                                                <!--end col-->

                                                <div class="col-lg-4">
                                                    <div class="card client-card">
                                                        <div class="card-body text-center">
                                                            <h5 class="client-name"
                                                                style="text-transform:uppercase; font-weight:bolder">
                                                                Linkedin</h5><br><span class="text-muted mr-3">
                                                                <i
                                                                    class=" mr-2 text-blue"></i>{{ $adresse->lien_youtube }}</span>
                                                        </div>
                                                        <!--end card-body-->
                                                    </div>
                                                    <!--end card-->
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <!--end tab-pene-->

                                        <!--end tab-pene-->
                                    </div>
                                    <!--end tab-content-->
                                </div>
                            </div>
                        </div>
                        <!--end modal-body-->
                        <div class="modal-footer"><button type="button" class="btn btn-danger center-block btn-sm"
                                data-dismiss="modal">Fermer</button>
                        </div>
                        <!--end modal-footer-->
                    </div>
                    <!--end modal-content-->
                </div>
                <!--end modal-dialog-->
            </div>
            <!--end modal-->
        </section>
    @endforeach
@endif
@endsection