@extends('layouts.admin_master')
@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row">
                <div class="col">
                    <h4 class="page-title">Nos Bannières</h4>
                </div>
            </div>
        </div>
    </div>
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
            <div class="card-body">
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
                                            action="{{ ('store/banniere') }}"
                                            enctype="multipart/form-data">
                                            @csrf

                                            <div class="form-group"><label for="libelle">Photo</label>
                                                <div class="custom-file"><input type="file"
                                                        value="{{ old('libelle') }}"
                                                        class="custom-file-input" id="validatedCustomFile"
                                                        name="libelle" required=""><label class="custom-file-label"
                                                        for="validatedCustomFile">Choisir
                                                        l'image de la réalisation
                                                    </label>
                                                </div>
                                                @error('libelle')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group mb-0 row">
                                                <div class="col-12 mt-2"><button
                                                        class="btn btn-primary btn-block waves-effect waves-light"
                                                        type="submit">Enregistrer<i
                                                            class="fas fa-sign-in-alt ml-1"></i></button>
                                                </div>
                                                <!--end col-->
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

            <table class="table table-bordered dt-responsive"
                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th>Libelle</th>
                        <th style="max-width: 120px !important">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if(!is_null($banniere))
                        <tr>
                            <td scope="col">{{ $banniere->id }}</td>
                            <td><img src="/BanniereImage/{{ $banniere->libelle }}" width="100px">
                            </td>
                            <td>
                                <form id="form-{{ $banniere->id }}"
                                    action="{{ route('delete.banniere', $banniere->id) }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('DELETE')
                                    <a class="btn btn-sm btn-soft-primary btn-circle mr-2" href="#!"
                                        data-target="#modal_{{ $banniere->id }}" data-toggle="modal"><i
                                            class="dripicons-pencil" title="modifier" style="color: orange"></i></a>
                                    <button class="btn btn-sm btn-soft-danger btn-circle mr-2" href=""><i
                                            class="dripicons-trash" title="supprimer" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>


        <div class="card">
            <div class="card-body">
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
                                            action="{{ ('store/banniere') }}"
                                            enctype="multipart/form-data">
                                            @csrf

                                            <div class="form-group"><label for="libelle">Photo</label>
                                                <div class="custom-file"><input type="file"
                                                        value="{{ old('libelle') }}"
                                                        class="custom-file-input" id="validatedCustomFile"
                                                        name="libelle" required=""><label class="custom-file-label"
                                                        for="validatedCustomFile">Choisir
                                                        l'image de la réalisation
                                                    </label>
                                                </div>
                                                @error('libelle')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group mb-0 row">
                                                <div class="col-12 mt-2"><button
                                                        class="btn btn-primary btn-block waves-effect waves-light"
                                                        type="submit">Enregistrer<i
                                                            class="fas fa-sign-in-alt ml-1"></i></button>
                                                </div>
                                                <!--end col-->
                                            </div>
                                        </form>
                                    </div>
                                </div>
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


            <table class="table table-bordered dt-responsive"
                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th>image banniere</th>
                        <th style="max-width: 120px !important">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if(!is_null($banniere))
                        <tr>
                            <td scope="col">{{ $banniere->id }}</td>
                            <td><img src="/BanniereImage/{{ $banniere->imagebanniere }}" width="100px">
                            </td>
                            <td>
                                <form id="form-{{ $banniere->id }}"
                                    action="{{ route('delete.banniere', $banniere->id) }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('DELETE')
                                    <a class="btn btn-sm btn-soft-primary btn-circle mr-2" href="#!"
                                        data-target="#modalimag_{{ $banniere->id }}" data-toggle="modal"><i
                                            class="dripicons-pencil" title="modifier" style="color: orange"></i></a>
                                    <button class="btn btn-sm btn-soft-danger btn-circle mr-2" href=""><i
                                            class="dripicons-trash" title="supprimer" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>


<section>
    <!--modal-->
    @if(!is_null($banniere))
        <div class="modal fade" id="modal_{{ $banniere->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalDefaultLogin" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <!--end modal-header-->
                    <div class="modal-body">
                        <div class="card-body p-0 auth-header-box">
                            <div class="text-center p-3">
                                <h4 style="color: red" class="mt-3 mb-1 font-weight-semibold font-18">
                                    Vous pouvez mettre à jour la bannière !</h4>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane active p-3 pt-3" id="LogIn_Tab" role="tabpanel">
                                <form class="form-horizontal auth-form my-4" method="POST"
                                    action="{{ route('banniere.update', $banniere->id) }}"
                                    enctype="multipart/form-data">
                                    @csrf

                                    @method('PUT')
                                    <input type="hidden" name="_method" value="put">
                                    <div class="form-group"><label for="libelle">Image : </label>
                                        <div class="custom-file"><input type="file" class="custom-file-input"
                                                id="validatedCustomFile" name="libelle"><label class="custom-file-label"
                                                for="validatedCustomFile">Choisissez
                                                l'image de la bannière
                                            </label> <br><br>
                                            <img src="/BanniereImage/{{ $banniere->libelle }}" width="140px"
                                                class="img-fluid"><br><br>
                                        </div>
                                        @error('libelle')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group mb-0 row">
                                        <div class="col-12 mt-2"><button
                                                class="btn btn-primary btn-block waves-effect waves-light"
                                                type="submit">Mettre à jour<i
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
    @endif
</section>

<section>
    <!--modal-->
    @if(!is_null($banniere))
        <div class="modal fade" id="modalimag_{{ $banniere->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalDefaultLogin" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <!--end modal-header-->
                    <div class="modal-body">
                        <div class="card-body p-0 auth-header-box">
                            <div class="text-center p-3">
                                <h4 style="color: red" class="mt-3 mb-1 font-weight-semibold font-18">
                                    Vous pouvez mettre à jour la bannière !</h4>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane active p-3 pt-3" id="LogIn_Tab" role="tabpanel">
                                <form class="form-horizontal auth-form my-4" method="POST"
                                    action="{{ route('banniere.update', $banniere->id) }}"
                                    enctype="multipart/form-data">
                                    @csrf

                                    @method('PUT')
                                    <input type="hidden" name="_method" value="put">
                                    <div class="form-group"><label for="imagebanniere">Image : </label>
                                        <div class="custom-file"><input type="file" class="custom-file-input"
                                                id="validatedCustomFile" name="imagebanniere"><label class="custom-file-label"
                                                for="validatedCustomFile">Choisissez
                                                l'image de la bannière
                                            </label> <br><br>
                                            <img src="/BanniereImage/{{ $banniere->imagebanniere }}" width="140px"
                                                class="img-fluid"><br><br>
                                        </div>
                                        @error('imagebanniere')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <!--end form-group-->
                                    <div class="form-group mb-0 row">
                                        <div class="col-12 mt-2"><button
                                                class="btn btn-primary btn-block waves-effect waves-light"
                                                type="submit">Mettre à jour<i
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
    @endif
</section>

@endsection