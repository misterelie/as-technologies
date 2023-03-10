<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from mannatthemes.com/dastyle/default/crm-index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Feb 2023 17:02:12 GMT -->

<head>
    <meta charset="utf-8">
    <title>Admin AS technologies</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.png') }}">
    <link href="{{ asset('admin/plugins/datatables/dataTables.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/plugins/datatables/buttons.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('admin/summernote/summernote.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/summernote/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/summernote/summernote-lite.css') }}">

    <!-- Responsive datatable examples -->
    <link href="{{ asset('admin/plugins/datatables/responsive.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css"><!-- App css -->
    <!-- App css -->
    <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('admin/assets/css/jquery-ui.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/assets/css/metisMenu.min.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('admin/plugins/daterangepicker/daterangepicker.css') }}"
        rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/assets/css/app.min.css') }}" rel="stylesheet" type="text/css">

</head>

<body class="dark-sidenav">
    <!-- Left Sidenav -->
    <div class="left-sidenav">
        <!-- LOGO -->
        <div class="brand active"><a href="{{ url('/') }}" class="logo active"><span><img
            src="{{ asset('admin/assets/images/favicon.png') }}" alt="logo-small"
            class="logo-sm"></span><span>
        <h5 class="mb-2" style="color: #ffff; font-weight: bold">AS TECHNOLOGIES</h5>
        <img span></a>
</div> <br>
        <!--end logo-->
        <div class="menu-content h-100" data-simplebar>
            <ul class="metismenu left-sidenav-menu">
                <li><a href="{{ route('dashboard') }}"><i data-feather="home"
                            class="align-self-center menu-icon"></i><span>Accueil</span><span
                            class="menu-arrow"></i></span>
                    </a>
                </li>

                <li><a href="javascript: void(0);"><i data-feather="grid"
                            class="align-self-center menu-icon"></i><span>Pages</span><span class="menu-arrow"><i
                                class="mdi mdi-chevron-right"></i></span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">

                        <li class="nav-item"><a class="nav-link"
                                href="{{ route('admin.service.index') }} "><i
                                    class="ti-control-record"></i>Réalisations</a></li>
                        <li class="nav-item"><a class="nav-link"
                                href="{{ route('admin.realisation.liste_realisation') }}"><i
                                    class="ti-control-record"></i>Clients</a>
                        </li>

                        <li class="nav-item"><a class="nav-link"
                                href="{{ route('admin.about.index') }}"><i
                                    class="ti-control-record"></i>Présentation</a>
                        </li>

                        <li class="nav-item"><a class="nav-link"
                                href="{{ route('admin.devis.demande_devis') }}"><i
                                    class="ti-control-record"></i>Demande Devis</a>
                        </li>

                    </ul>
                </li>

                <li><a href="javascript: void(0);"><i data-feather="grid"
                            class="align-self-center menu-icon"></i><span>Produits</span><span class="menu-arrow"><i
                                class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link"
                                href="{{ url('liste/produits') }}"><i
                                    class="ti-control-record"></i>Gestion
                                produits</a>
                        </li>
                        <li class="nav-item"><a class="nav-link"
                                href="{{ url('liste/marques') }}"><i
                                    class="ti-control-record"></i>Gestion
                                marques</a>
                        </li>
                        <li class="nav-item"><a class="nav-link"
                                href="{{ url('liste/categories') }}"><i
                                    class="ti-control-record"></i>Gestion catégories</a>
                        </li>
                    </ul>
                </li>

                <li><a href="javascript: void(0);"><i data-feather="grid"
                            class="align-self-center menu-icon"></i><span>Services</span><span class="menu-arrow"><i
                                class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link"
                                href="{{ route('admin.service.index') }}"><i
                                    class="ti-control-record"></i>gestion services</a>
                        </li>

                        <li class="nav-item"><a class="nav-link"
                                href="{{ route('admin.devis.specificite') }} "><i
                                    class="ti-control-record"></i>Spécificité service</a>
                        </li>
                    </ul>
                </li>

                <li><a href="javascript: void(0);"><i data-feather="grid"
                            class="align-self-center menu-icon"></i><span>Contacts</span><span class="menu-arrow"><i
                                class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link"
                                href="{{ route('admin.contact.index') }}"><i
                                    class="ti-control-record"></i>Nos Contacts</a>
                        </li>
                        <li class="nav-item"><a class="nav-link"
                                href="{{ route('admin.messages.all_message') }}"><i
                                    class="ti-control-record"></i>Messages contacts</a>
                        </li>
                    </ul>
                </li>

                <li><a href="javascript: void(0);"><i data-feather="lock"
                            class="align-self-center menu-icon"></i><span>Paramètres</span><span class="menu-arrow"><i
                                class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link"
                                href="{{ route('admin.banniere.add_banniere') }}"><i
                                    class="ti-control-record"></i>Bannières</a>
                        </li>

                        <li class="nav-item"><a class="nav-link"
                                href="{{ route('admin.projet.add_project') }}"><i
                                    class="ti-control-record"></i>Projets</a>
                        </li>

                        <li class="nav-item"><a class="nav-link" href="{{ url('utilisateurs') }}"><i
                                    class="ti-control-record"></i>Gestion utilisateurs</a>
                        </li>

                        <li class="nav-item"><a class="nav-link" href="{{ route('profile.edit') }}"><i
                                    class="ti-control-record"></i>Mon profil</a>
                        </li>
                    </ul>
                </li>

                <hr class="hr-dashed hr-menu">
                {{-- <li class="menu-label my-2">Components & Extra</li> --}}
            </ul>
        </div>
    </div><!-- end left-sidenav-->

    <div class="page-wrapper">
        <!-- Top Bar Start -->
        <div class="topbar">
            <!-- Navbar -->
            <nav class="navbar-custom">
                <ul class="list-unstyled topbar-nav float-right mb-0">
                    
                    {{-- <li class="dropdown notification-list"><a
                            class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false"><i data-feather="bell"
                                class="align-self-center topbar-icon"></i> <span
                                class="badge badge-danger badge-pill noti-icon-badge">2</span></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg pt-0">
                            <h6
                                class="dropdown-item-text font-15 m-0 py-3 border-bottom d-flex justify-content-between align-items-center">
                                Notifications <span class="badge badge-primary badge-pill">2</span></h6>
                            <div class="notification-menu" data-simplebar>
                                <!-- item--> <a href="#" class="dropdown-item py-3"><small
                                        class="float-right text-muted pl-2">2 min ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-soft-primary"><i data-feather="shopping-cart"
                                                class="align-self-center icon-xs"></i></div>
                                        <div class="media-body align-self-center ml-2 text-truncate">
                                            <h6 class="my-0 font-weight-normal text-dark">Your order is placed</h6>
                                            <small class="text-muted mb-0">Dummy text of the printing and
                                                industry.</small>
                                        </div>
                                        <!--end media-body-->
                                    </div>
                                    <!--end media-->
                                </a>
                                <!--end-item-->
                                <!-- item--> <a href="#" class="dropdown-item py-3"><small
                                        class="float-right text-muted pl-2">10 min ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-soft-primary"><img src="assets/images/users/user-4.jpg"
                                                alt="" class="thumb-sm rounded-circle"></div>
                                        <div class="media-body align-self-center ml-2 text-truncate">
                                            <h6 class="my-0 font-weight-normal text-dark">Meeting with designers</h6>
                                            <small class="text-muted mb-0">It is a long established fact that a
                                                reader.</small>
                                        </div>
                                        <!--end media-body-->
                                    </div>
                                    <!--end media-->
                                </a>
                                <!--end-item-->
                                <!-- item--> <a href="#" class="dropdown-item py-3"><small
                                        class="float-right text-muted pl-2">40 min ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-soft-primary"><i data-feather="users"
                                                class="align-self-center icon-xs"></i></div>
                                        <div class="media-body align-self-center ml-2 text-truncate">
                                            <h6 class="my-0 font-weight-normal text-dark">UX 3 Task complete.</h6><small
                                                class="text-muted mb-0">Dummy text of the printing.</small>
                                        </div>
                                        <!--end media-body-->
                                    </div>
                                    <!--end media-->
                                </a>
                                <!--end-item-->
                                <!-- item--> <a href="#" class="dropdown-item py-3"><small
                                        class="float-right text-muted pl-2">1 hr ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-soft-primary"><img src="assets/images/users/user-5.jpg"
                                                alt="" class="thumb-sm rounded-circle"></div>
                                        <div class="media-body align-self-center ml-2 text-truncate">
                                            <h6 class="my-0 font-weight-normal text-dark">Your order is placed</h6>
                                            <small class="text-muted mb-0">It is a long established fact that a
                                                reader.</small>
                                        </div>
                                        <!--end media-body-->
                                    </div>
                                    <!--end media-->
                                </a>
                                <!--end-item-->
                                <!-- item--> <a href="#" class="dropdown-item py-3"><small
                                        class="float-right text-muted pl-2">2 hrs ago</small>
                                    <div class="media">
                                        <div class="avatar-md bg-soft-primary"><i data-feather="check-circle"
                                                class="align-self-center icon-xs"></i></div>
                                        <div class="media-body align-self-center ml-2 text-truncate">
                                            <h6 class="my-0 font-weight-normal text-dark">Payment Successfull</h6><small
                                                class="text-muted mb-0">Dummy text of the printing.</small>
                                        </div>
                                        <!--end media-body-->
                                    </div>
                                    <!--end media-->
                                </a>
                                <!--end-item-->
                            </div><!-- All--> <a href="javascript:void(0);"
                                class="dropdown-item text-center text-primary">View all <i
                                    class="fi-arrow-right"></i></a>
                        </div>
                    </li> --}}
                    <li class="dropdown"><a class="nav-link dropdown-toggle waves-effect waves-light nav-user"
                            data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                            aria-expanded="false"><span class="ml-1 nav-user-name hidden-sm">

                                <!-- Recuperer le nom de l'utilisateur connecté -->
                                {{ Auth::user()->name }}</span>

                            <!-- AFFICHER PHOTO DE L'UTILSATEUR QUAND IL A  CHOISI -->
                            @if(Auth::user()->photo != null)
                                <img src="{{ asset('UsersImage/'.Auth::user()->photo) }}"
                                    alt="profile-user" class="rounded-circle">
                            @else
                                <!--SINON AFFICHER L'IMAGE PAR DEFAUT -->
                                <img src="{{ asset('admin/assets/images/users/user-5.jpg') }}"
                                    alt="profile-user" class="rounded-circle">
                        </a>
                        @endif


                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"
                                href="{{ route('profile.edit') }}"><i data-feather="user"
                                    class="align-self-center icon-xs icon-dual mr-1"></i>
                                Profil</a>


                            {{-- <a class="dropdown-item" href=""><i data-feather="settings"
                                    class="align-self-center icon-xs icon-dual mr-1"></i> Settings
                                </a> --}}
                            <div class="dropdown-divider mb-0"></div>
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();" class="dropdown-item">
                                    <i data-feather="power"
                                        class="align-self-center icon-xs icon-dual mr-1"></i>{{ __('Déconnexion') }}
                                </x-responsive-nav-link>
                            </form>
                        </div>
                    </li>
                </ul>
                <!--end topbar-nav-->
                <ul class="list-unstyled topbar-nav mb-0">
                    <li><button class="nav-link button-menu-mobile"><i data-feather="menu"
                                class="align-self-center topbar-icon"></i></button></li>
                    {{-- <li class="creat-btn">
                        <div class="nav-link"><a class="btn btn-sm btn-soft-primary" href="#" role="button"><i
                                    class="fas fa-plus mr-2"></i>New Task</a>
                        </div>
                    </li> --}}
                </ul>
            </nav>
            <!-- end navbar-->
        </div>
        <!-- Top Bar End -->

        <!-- Page Content-->
        <div class="page-content">

            <footer class="footer text-center text-sm-left">&copy; 2023 Allô Service<span
                    class="d-none d-sm-inline-block float-right">Conçu par <i class="mdi mdi-heart text-danger"></i>
                    Allô Service</span>
            </footer>
            @yield('content')
            <!--end footer-->
        </div><!-- end page content -->
    </div><!-- end page-wrapper -->


    <!-- jQuery  -->
    <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/metismenu.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/waves.js') }}"></script>
    <script src="{{ asset('admin/assets/js/feather.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/moment.js') }}"></script>
    <!-- Required datatable js -->
    <script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Buttons examples -->
    <script src="{{ asset('admin/plugins/datatables/dataTables.buttons.min.js') }}"></script>

    <script src="{{ asset('admin/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables/jszip.min.js') }}"></script>
    <script src="../plugins/datatables/pdfmake.min.js"></script>
    <script src="{{ asset('admin/plugins/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables/buttons.colVis.min.js') }}"></script>
    <!-- Responsive examples -->
    <script src="{{ asset('admin/plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/assets/pages/jquery.datatable.init.js') }}"></script>

    <!-- summernote js -->

    <script src="{{ asset('admin/summernote/summernote.js') }}"></script>
    <script src="{{ asset('admin/summernote/summernote-bs4.js') }}"></script>


    <!-- App js -->
    <script src="{{ asset('admin/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('admin/plugins/apex-charts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/flot-chart/jquery.canvaswrapper.js') }}"></script>
    <script src="{{ asset('admin/plugins/flot-chart/jquery.colorhelpers.js') }}"></script>
    <script src="{{ asset('admin/plugins/flot-chart/jquery.flot.js') }}"></script>
    <script src="{{ asset('admin//plugins/flot-chart/jquery.flot.saturated.js') }}"></script>
    <script src="{{ asset('admin/plugins/flot-chart/jquery.flot.browser.js') }}"></script>
    <script src="{{ asset('admin/plugins/flot-chart/jquery.flot.drawSeries.js') }}"></script>
    <script src="{{ asset('admin/plugins/flot-chart/jquery.flot.uiConstants.js') }}"></script>
    <script src="{{ asset('admin/plugins/flot-chart/jquery.flot-dataType.js') }}"></script>
    <script src="{{ asset('admin/assets/pages/jquery.crm_dashboard.init.js') }}"></script>
    <!-- App js -->
    <script src="{{ asset('admin/assets/js/app.js') }}"></script>
    <script>
        $('#summernote,.summernote').summernote({
            height: 100
        });
    </script>

</body>
<!-- Mirrored from mannatthemes.com/dastyle/default/crm-index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Feb 2023 17:03:32 GMT -->

</html>