<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from mannatthemes.com/dastyle/default/crm-index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Feb 2023 17:02:12 GMT -->

<head>
    <meta charset="utf-8">
    <title>Admin & AS technologies</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.png') }}">
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
        </div>
        <!--end logo-->
        <div class="menu-content h-100" data-simplebar>
            <ul class="metismenu left-sidenav-menu">
                {{-- <li class="menu-label mt-0">Main</li> --}}
                <li><a href="javascript: void(0);"><i data-feather="home"
                            class="align-self-center menu-icon"></i><span>Pages</span><span class="menu-arrow"><i
                                class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link"
                                href="{{ route('admin.service.index') }}"><i
                                    class="ti-control-record"></i>Services</a></li>
                        <li class="nav-item"><a class="nav-link"
                                href="{{ route('admin.service.index') }} "><i
                                    class="ti-control-record"></i>Réalisations</a></li>
                        <li class="nav-item"><a class="nav-link"
                                href="{{ route('admin.realisation.liste_realisation') }}"><i
                                    class="ti-control-record"></i>Clients</a>
                        </li>

                        <li class="nav-item"><a class="nav-link"
                                href="{{ route('admin.contact.index') }}"><i
                                    class="ti-control-record"></i>Nos Contacts</a>
                        </li>
                <li class="nav-item"><a class="nav-link"
                        href="{{ route('admin.banniere.add_banniere') }}"><i
                            class="ti-control-record"></i>Bannière</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ route('admin.about.index') }}"><i
                            class="ti-control-record"></i>Présentation</a>
                </li>
                <li class="nav-item"><a class="nav-link"
                        href="{{ route('admin.projet.add_project') }}"><i
                            class="ti-control-record"></i>Projets</a>
                </li>
                <li class="nav-item"><a class="nav-link"
                        href="{{ route('admin.devis.demande_devis') }}"><i
                            class="ti-control-record"></i>Demande Devis</a>
                </li>
                <li class="nav-item"><a class="nav-link"
                        href="{{ route('admin.devis.specificite') }} "><i
                            class="ti-control-record"></i>Spécificités services</a>
                </li>
            </ul>
            </li>

            <li><a href="javascript: void(0);"><i data-feather="grid"
                        class="align-self-center menu-icon"></i><span>Produits</span><span class="menu-arrow"><i
                            class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="{{ url('liste/produits') }}"><i class="ti-control-record"></i>Gestion
                            produits</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('liste/marques') }}"><i class="ti-control-record"></i>Gestion
                            marques</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('liste/categories') }}"><i class="ti-control-record"></i>Gestion
                            catégories</a>
                    </li>
                </ul>
            </li>

            <li><a href="javascript: void(0);"><i data-feather="lock"
                        class="align-self-center menu-icon"></i><span>Paremètres</span><span class="menu-arrow"><i
                            class="mdi mdi-chevron-right"></i></span></a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="auth-login.html"><i
                                class="ti-control-record"></i></a></li>

                </ul>
            </li>
            <hr class="hr-dashed hr-menu">
            {{-- <li class="menu-label my-2">Autres</li> --}}
            {{-- <li><a href="javascript: void(0);"><i data-feather="box"
                            class="align-self-center menu-icon"></i><span>UI Kit</span><span class="menu-arrow"><i
                                class="mdi mdi-chevron-right"></i></span></a> --}}
            {{-- <ul class="nav-second-level" aria-expanded="false">
                        <li><a href="javascript: void(0);"><i class="ti-control-record"></i>UI Elements <span
                                    class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="ui-alerts.html">Alerts</a></li>
                                <li><a href="ui-avatar.html">Avatar</a></li>
                                <li><a href="ui-buttons.html">Buttons</a></li>
                                <li><a href="ui-badges.html">Badges</a></li>
                                <li><a href="ui-cards.html">Cards</a></li>
                                <li><a href="ui-carousels.html">Carousels</a></li>
                                <li><a href="ui-check-radio.html"><span>Check & Radio</span></a></li>
                                <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                                <li><a href="ui-grids.html">Grids</a></li>
                                <li><a href="ui-images.html">Images</a></li>
                                <li><a href="ui-list.html">List</a></li>
                                <li><a href="ui-modals.html">Modals</a></li>
                                <li><a href="ui-navs.html">Navs</a></li>
                                <li><a href="ui-navbar.html">Navbar</a></li>
                                <li><a href="ui-paginations.html">Paginations</a></li>
                                <li><a href="ui-popover-tooltips.html">Popover & Tooltips</a></li>
                                <li><a href="ui-progress.html">Progress</a></li>
                                <li><a href="ui-spinners.html">Spinners</a></li>
                                <li><a href="ui-tabs-accordions.html">Tabs & Accordions</a></li>
                                <li><a href="ui-toasts.html">Toasts</a></li>
                                <li><a href="ui-typography.html">Typography</a></li>
                                <li><a href="ui-videos.html">Videos</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript: void(0);"><i class="ti-control-record"></i>Advanced UI <span
                                    class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="advanced-animation.html">Animation</a></li>
                                <li><a href="advanced-clipboard.html">Clip Board</a></li>
                                <li><a href="advanced-highlight.html">Highlight</a></li>
                                <li><a href="advanced-idle-timer.html">Idle Timer</a></li>
                                <li><a href="advanced-kanban.html">Kanban</a></li>
                                <li><a href="advanced-lightbox.html">Lightbox</a></li>
                                <li><a href="advanced-nestable.html">Nestable List</a></li>
                                <li><a href="advanced-rangeslider.html">Range Slider</a></li>
                                <li><a href="advanced-ratings.html">Ratings</a></li>
                                <li><a href="advanced-ribbons.html">Ribbons</a></li>
                                <li><a href="advanced-session.html">Session Timeout</a></li>
                                <li><a href="advanced-sweetalerts.html">Sweet Alerts</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript: void(0);"><i class="ti-control-record"></i>Forms <span
                                    class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="forms-advanced.html">Advance Elements</a></li>
                                <li><a href="forms-elements.html">Basic Elements</a></li>
                                <li><a href="forms-editors.html">Editors</a></li>
                                <li><a href="forms-uploads.html">File Upload</a></li>
                                <li><a href="forms-repeater.html">Repeater</a></li>
                                <li><a href="forms-validation.html">Validation</a></li>
                                <li><a href="forms-wizard.html">Wizard</a></li>
                                <li><a href="forms-x-editable.html">X Editable</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript: void(0);"><i class="ti-control-record"></i>Charts <span
                                    class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="charts-apex.html">Apex</a></li>
                                <li><a href="charts-chartjs.html">Chartjs</a></li>
                                <li><a href="charts-flot.html">Flot</a></li>
                                <li><a href="charts-morris.html">Morris</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript: void(0);"><i class="ti-control-record"></i>Tables <span
                                    class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="tables-basic.html">Basic</a></li>
                                <li><a href="tables-datatable.html">Datatables</a></li>
                                <li><a href="tables-editable.html">Editable</a></li>
                                <li><a href="tables-responsive.html">Responsive</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript: void(0);"><i class="ti-control-record"></i>Icons <span
                                    class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="icons-dripicons.html">Dripicons</a></li>
                                <li><a href="icons-feather.html">Feather</a></li>
                                <li><a href="icons-fontawesome.html">Font awesome</a></li>
                                <li><a href="icons-materialdesign.html">Material Design</a></li>
                                <li><a href="icons-themify.html">Themify</a></li>
                                <li><a href="icons-typicons.html">Typicons</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript: void(0);"><i class="ti-control-record"></i>Maps <span
                                    class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="maps-google.html">Google Maps</a></li>
                                <li><a href="maps-leaflet.html">Leaflet Maps</a></li>
                                <li><a href="maps-vector.html">Vector Maps</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript: void(0);"><i class="ti-control-record"></i>Email Template <span
                                    class="menu-arrow left-has-menu"><i class="mdi mdi-chevron-right"></i></span></a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="email-templates-alert.html">Alert Email</a></li>
                                <li><a href="email-templates-basic.html">Basic Action Email</a></li>
                                <li><a href="email-templates-billing.html">Billing Email</a></li>
                            </ul>
                        </li>
                    </ul> --}}
            </li>
            {{--                 
                <li><a href="javascript: void(0);"><i data-feather="file-plus"
                            class="align-self-center menu-icon"></i><span>Pages</span><span class="menu-arrow"><i
                                class="mdi mdi-chevron-right"></i></span></a> --}}
            {{-- <ul class="nav-second-level" aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="pages-blogs.html"><i
                                    class="ti-control-record"></i>Blogs</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages-faqs.html"><i
                                    class="ti-control-record"></i>FAQs</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages-pricing.html"><i
                                    class="ti-control-record"></i>Pricing</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages-profile.html"><i
                                    class="ti-control-record"></i>Profile</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages-starter.html"><i
                                    class="ti-control-record"></i>Starter Page</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages-timeline.html"><i
                                    class="ti-control-record"></i>Timeline</a></li>
                        <li class="nav-item"><a class="nav-link" href="pages-treeview.html"><i
                                    class="ti-control-record"></i>Treeview</a></li>
                    </ul> --}}
            </li>
            </ul>

        </div>
    </div><!-- end left-sidenav-->

    <div class="page-wrapper">
        <!-- Top Bar Start -->
        <div class="topbar">
            <!-- Navbar -->
            <nav class="navbar-custom">
                <ul class="list-unstyled topbar-nav float-right mb-0">
                    <li class="dropdown hide-phone"><a
                            class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false"><i data-feather="search"
                                class="topbar-icon"></i></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg p-0">
                            <!-- Top Search Bar -->
                            <div class="app-search-topbar">
                                <form action="#" method="get"><input type="search" name="search"
                                        class="from-control top-search mb-0" placeholder="Type text..."> <button
                                        type="submit"><i class="ti-search"></i></button></form>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown notification-list"><a
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
                    </li>
                    <li class="dropdown"><a class="nav-link dropdown-toggle waves-effect waves-light nav-user"
                            data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                            aria-expanded="false"><span class="ml-1 nav-user-name hidden-sm">

                                <!-- AFFICHER PHOTO DE L'UTILSATEUR QUAND IL A  CHOISI -->
                                {{ Auth::user()->name }}</span> <img
                                src="{{ asset('admin/assets/images/users/user-5.jpg') }}"
                                alt="profile-user" class="rounded-circle"></a>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"
                                href="{{ route('profile.edit') }}"><i data-feather="user"
                                    class="align-self-center icon-xs icon-dual mr-1"></i>
                                Profile</a>
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
                    <li class="creat-btn">
                        <div class="nav-link"><a class="btn btn-sm btn-soft-primary" href="#" role="button"><i
                                    class="fas fa-plus mr-2"></i>New Task</a></div>
                    </li>
                </ul>
            </nav>
            <!-- end navbar-->
        </div><!-- Top Bar End -->
        <!-- Page Content-->
        <div class="page-content">
            <div class="container-fluid">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="row">
                                <div class="col">
                                    <h4 class="page-title">CRM</h4>
                                    <ol class="breadcrumb">

                                        <li class="breadcrumb-item active"></li>
                                    </ol>
                                </div>
                                <!--end col-->
                                <div class="col-auto align-self-center"><a href="#"
                                        class="btn btn-sm btn-outline-primary" id="Dash_Date"><span class="day-name"
                                            id="Day_Name">Today:</span>&nbsp; <span class="" id="Select_date">Jan
                                            11</span> <i data-feather="calendar"
                                            class="align-self-center icon-xs ml-1"></i> </a><a href="#"
                                        class="btn btn-sm btn-outline-primary"><i data-feather="download"
                                            class="align-self-center icon-xs"></i></a>

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
                {{-- <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h4 class="card-title">Leads And Vendors</h4>
                                    </div>
                                    <!--end col-->
                                    <div class="col-auto">
                                        <div class="dropdown"><a href="#"
                                                class="btn btn-sm btn-outline-light dropdown-toggle"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">This
                                                Month<i class="las la-angle-down ml-1"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"
                                                    href="#">Today</a> <a class="dropdown-item" href="#">Last Week</a>
                                                <a class="dropdown-item" href="#">Last Month</a> <a
                                                    class="dropdown-item" href="#">This Year</a></div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end card-header-->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-9 border-right">
                                        <div class="row mb-3">
                                            <div class="col">
                                                <div class="media"><i data-feather="phone"
                                                        class="align-self-center icon-lg text-secondary"></i>
                                                    <div class="media-body align-self-center ml-2">
                                                        <h6 class="mt-0 mb-1 font-16">76% Deals Successfull <i
                                                                class="fas fa-check text-success"></i></h6>
                                                        <p class="text-muted mb-0">This is a simple hero unit, a simple
                                                            jumbotron-style component.</p>
                                                    </div>
                                                    <!--end media body-->
                                                </div>
                                            </div>
                                            <div class="col-auto"><button type="button"
                                                    class="btn btn-sm btn-outline-secondary px-3 mt-2">More
                                                    details</button></div>
                                        </div>
                                        <div class="flot-data">
                                            <div id="CrmDashChart" class="flot-chart"></div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-lg-3"><span class="badge badge-soft-primary float-right"><i
                                                class="far fa-arrow-alt-circle-up mr-1"></i>30.2%</span>
                                        <div class="media">
                                            <div class="icon-info align-self-center"><i
                                                    class="far fa-smile align-self-center icon-lg icon-dual"></i></div>
                                            <div class="media-body align-self-center text-truncate ml-2">
                                                <h3 class="mb-0 font-weight-bold">65k</h3>
                                                <p class="mb-0 text-muted">Happy Customers</p>
                                            </div>
                                            <!--end media-body-->
                                        </div>
                                        <div class="apexchart-wrapper mt-3">
                                            <div id="dash_spark_1" class="chart-gutters"></div>
                                        </div>
                                        <hr class="hr-dashed"><span class="badge badge-soft-danger float-right"><i
                                                class="far fa-arrow-alt-circle-down mr-1"></i>1.1%</span>
                                        <div class="media">
                                            <div class="icon-info align-self-center"><i
                                                    class="far fa-user align-self-center icon-lg icon-dual"></i></div>
                                            <div class="media-body align-self-center text-truncate ml-2">
                                                <h3 class="mb-0 font-weight-bold">10k</h3>
                                                <p class="mb-0 text-muted">New Customers</p>
                                            </div>
                                            <!--end media-body-->
                                        </div>
                                        <div class="apexchart-wrapper mt-3">
                                            <div id="dash_spark_2" class="chart-gutters"></div>
                                        </div>
                                        <hr class="hr-dashed"><span class="badge badge-soft-primary float-right"><i
                                                class="far fa-arrow-alt-circle-up mr-1"></i>11.8%</span>
                                        <div class="media">
                                            <div class="icon-info align-self-center"><i
                                                    class="far fa-registered align-self-center icon-lg icon-dual"></i>
                                            </div>
                                            <div class="media-body align-self-center text-truncate ml-2">
                                                <h3 class="mb-0 font-weight-bold">901</h3>
                                                <p class="mb-0 text-muted">New Register</p>
                                            </div>
                                            <!--end media-body-->
                                        </div>
                                        <div class="apexchart-wrapper mt-3">
                                            <div id="dash_spark_3" class="chart-gutters"></div>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div>
                            <!--end card-body-->
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                </div> --}}
                <!--end row-->

                <!--end row-->

                <!--end row-->
            </div><!-- container -->
            <footer class="footer text-center text-sm-left">&copy; 2023 Allô Service<span
                    class="d-none d-sm-inline-block float-right">Conçu par <i class="mdi mdi-heart text-danger"></i>
                    Allô Service</span>
            </footer>
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
</body>
<!-- Mirrored from mannatthemes.com/dastyle/default/crm-index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Feb 2023 17:03:32 GMT -->

</html>