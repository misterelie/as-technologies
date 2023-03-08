@extends('layouts.admin_master')
@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="row">
                <div class="col">
                    <h4 class="page-title">Toutes les demandes de Devis</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Dévis</li>
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
    
        <div class="card-body">
            <table id="datatable" class="table table-bordered dt-responsive"
                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th>Nom du demandeur</th>
                        <th>Email</th>
                        <th>Téléphone</th>
                        <th>Prestation souhaitée</th>
                        <th>spécificité</th>
                        <th>Fichier</th>
                        <th style="max-width: 120px !important">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if(!is_null($devis))
                        @foreach($devis as $devi)
                            <tr>
                                <td scope="col">{{ $devi->id }}</td>
                                <td>{{ $devi->nom }}</td>
                                <td>{{ $devi->adresse_email }}</td>
                                <td>{{ $devi->telephone }}</td>
                                <td>{{ $devi->service->libelle }}</td>
                                <td>{{ $devi->specifite_service }}</td>
                                <td>
                                    @if(!is_null($devi->fichier_devis))
                                    <a href="{{ asset('FichierDevis/'.$devi->fichier_devis) }}"
                                        target="_blank" rel="noopener noreferrer">
                                        <img src="{{ asset('assets/pdf.png') }}" target-="" alt=""
                                            width="25">
                                    </a>
                                    @endif
                                </td>
                                <td>
                                    <form id="form-{{ $devi->id }}"
                                        action="{{ route('delete.devis', $devi->id) }}"
                                        method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('DELETE')

                                        <a class="btn btn-sm btn-soft-info btn-circle mr-2" href="#!"
                                            data-target="#exampleModalScrollable_{{ $devi->id }}"
                                            data-toggle="modal"><i class="fa fa-eye" title="détail"
                                                style="color:blue"></i></a>

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
    @if(!is_null($devis))
        @foreach($devis as $devi)
            <section>
                <!--end modal-->
                <div class="modal fade" id="exampleModalScrollable_{{ $devi->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title m-0" id="exampleModalScrollableTitle">DETAIL DU DEVIS DEMANDE
                                </h6>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true"><i class="la la-times"></i></span></button>
                            </div>
                            <!--end modal-header-->
                            <div class="modal-body">
                                <p><span style="font-size: 14px; font-weight:bolder; color:#1761fd">Pays: <br>
                                    </span>{{ $devi->pays }}</p>
                                <p><span style="font-size: 14px; font-weight:bolder; color:#1761fd">Ville: <br>
                                    </span>{{ $devi->ville }}</p>
                                <p><span style="font-size: 14px; font-weight:bolder; color:#1761fd">Délai de liraison:
                                        <br>
                                    </span>{{ $devi->delai_livraison }}</p>
                                <p><span style="font-size: 14px; font-weight:bolder; color:#1761fd">Description
                                        détaillée: <br>
                                    </span>{!!$devi->description_detaillee !!}<br></p>
                            </div>
                            <!--end modal-body-->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Fermer
                                </button>
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
</section>
@endsection