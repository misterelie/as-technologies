<!doctype html>
<html lang="fr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta name="language" content="fr,fr-fr">
    <title>Technologies | Allô Service</title>
    <meta name="description" content="Société de technologies et d'ingénierie informatique">
    <meta name="author" content="Technologies | Allô Services">
    <link rel="canonical" href="index.html" />
    <meta name="robots" content="index,follow,all">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <meta property="og:type" content="website">
    <meta property="og:title" content="Technologies | Allô Services">
    <meta property="og:site_name" content="Technologies Allô Services">
    <meta property="og:url" content="index.html">
    <meta property="og:description" content="Société de technologies et d'ingénierie informatique">
    <meta property="og:image" content="{{ asset('admin/assets/images/favicon.png') }}">
    <meta property="og:locale" content="fr_FR">

    <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.png') }}"
        type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('admin/assets/images/favicon.png') }}">

    <meta name="theme-color" content="#ffffff">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="{{ asset('assets/dist/site/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/cdn.jsdelivr.net/npm/%40mdi/font%404.7.95/css/materialdesignicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/dist/site/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/site/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/site/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/site/css/owl.theme.default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/site/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/site/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/site/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/site/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/site/css/my-style.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
</head>

<style>
    .nav>li>a:hover {
        background: #24a223;
    }
</style>

<body>
    <div class="loader_bg">
        <div class="loader"></div>
    </div>

    <header class="nav-area navbar-fixed-top" style="background:  #3800bf;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-menu">
                        <div class="navbar navbar-cus">
                            <div class="navbar-header">
                                <a href="{{ url('/') }}" class="navbar-brand" style="color:#fff">AS
                                    TECHNOLOGIES</a>
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target=".navbar-collapse">
                                    <span class="sr-only"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse">
                                <nav>
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="active"><a class="smoothmenu" style="color:#fff"
                                                href="{{ url('/') }}">Accueil</a></li>
                                        <li><a class="smoothmenu lien-menu" style="color:#fff"
                                                href="{{ route('front.presentation') }}">A propos</a>
                                        </li>
                                        <li><a class="smoothmenu lien-menu" style="color:#fff" href="#resume"></a></li>
                                        <li>
                                            <a class="smoothmenu"
                                                href="{{ route('front.nos-produits') }}">Produits
                                            </a>
                                        </li>
                                        <li>
                                            <a class="smoothmenu" style="color:#fff"
                                                href="{{ route('front.service') }}">Services
                                            </a>
                                        </li>
                                        <li>
                                            <a class="smoothmenu" style="color:#fff"
                                                href="{{ route('front.realisation') }}">Réalisations
                                            </a>
                                        </li>

                                        <li><a class="smoothmenu" style="color:#fff"
                                                href="{{ url('front/client') }}">Nos clients
                                            </a>
                                        </li>
                                        <li><a class="smoothmenu" style="color:#fff"
                                                href="{{ url('front/contact') }}">Contact</a></li>
                                        <li><a class="smoothmenu" style="color:#fff"
                                                href="{{ route('login') }}">
                                            </a>
                                        </li>

                                        <li><a class="smoothmenu" style="color:#fff"
                                                href="{{ route('register') }}">
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="home"></div><br><br>

    @if(!is_null($banniere))
        <div class="" id="">
            <img src="{{asset('/BanniereImage/'. $banniere->imagebanniere )}}" alt="" class="img-fluid img-responsive w-100">
        </div>
    @endif

    @yield('content')

    <style>
        #footer {
            background: #000;
            padding: 0 0 30px 0;
            color: #fff;
            font-size: 14px;
        }

        #footer .footer-top {
            background: #0c1817;
            border-bottom: 1px solid #18302c;
            padding: 60px 0 30px 0;
        }

        #footer .footer-top .footer-info {
            margin-bottom: 30px;
        }

        #footer .footer-top .footer-info h3 {
            font-size: 24px;
            margin: 0 0 20px 0;
            padding: 2px 0 2px 0;
            line-height: 1;
            font-weight: 700;
        }

        #footer .footer-top .footer-info p {
            font-size: 14px;
            line-height: 24px;
            margin-bottom: 0;
            font-family: "Raleway", sans-serif;
            color: #fff;
        }

        b,
        strong {
            font-weight: bolder;
        }

        .mt-3 {
            margin-top: 1rem !important;
        }

        #footer .footer-top .social-links a {
            font-size: 18px;
            display: inline-block;
            background: #1c3733;
            color: #fff;
            line-height: 1;
            padding: 8px 0;
            margin-right: 4px;
            border-radius: 50%;
            text-align: center;
            width: 36px;
            height: 36px;
            transition: 0.3s;
        }

        .bx {
            font-family: boxicons !important;
            font-weight: 400;
            font-style: normal;
            font-variant: normal;
            line-height: 1;
            text-rendering: auto;
            display: inline-block;
            text-transform: none;
            speak: none;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        #footer .footer-top .footer-links {
            margin-bottom: 30px;
        }

        #footer .footer-top .footer-links ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        #footer .footer-top .footer-links ul li:first-child {
            padding-top: 0;
        }

        #footer .footer-top .footer-links ul li {
            padding: 10px 0;
            display: flex;
            align-items: center;
        }

        #footer .footer-top .footer-links ul i {
            padding-right: 2px;
            color: #3601c6;
            font-size: 18px;
            line-height: 1;
        }

        #footer .footer-top .footer-links {
            margin-bottom: 30px;
        }

        #footer .footer-top h4 {
            font-size: 16px;
            font-weight: 600;
            color: #fff;
            position: relative;
            padding-bottom: 12px;
        }

        #footer .copyright {
            text-align: center;
            padding-top: 30px;
        }

        #footer .credits {
            padding-top: 10px;
            text-align: center;
            font-size: 13px;
            color: #fff;
        }

        #footer .footer-top .footer-newsletter form {
            margin-top: 30px;
            background: #fff;
            padding: 6px 10px;
            position: relative;
            border-radius: 4px 0 0 4px;
        }

        #footer .footer-top .footer-newsletter form input[type=email] {
            border: 0;
            padding: 4px;
            width: calc(100% - 110px);
        }

        #footer .footer-top .footer-newsletter form input[type=submit] {
            position: absolute;
            top: 0;
            right: -4px;
            bottom: 0;
            border: 0;
            background: none;
            font-size: 16px;
            padding: 0 20px;
            background: #3601c6;
            color: #fff;
            transition: 0.3s;
            border-radius: 0 4px 4px 0;
        }

        #footer .footer-top .footer-links ul a {
            color: #fff;
            transition: 0.3s;
            display: inline-block;
            line-height: 1;
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem;
        }

        #footer .footer-top .footer-info h3 {
            font-size: 24px;
            margin: 0 0 20px 0;
            padding: 2px 0 2px 0;
            line-height: 1;
            font-weight: 700;
        }
    </style>

    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        @if(!is_null($adresses))
                            @foreach($adresses as $adresse)
                                <div class="footer-info">
                                    <h3 style="color:#ffff">AS TECHNOLOGIES
                                    </h3>
                                    </p>
                                    <div class="social-links mt-3">
                                        <p> {{ $adresse->adresse }}<br> <strong>Téléphone:</strong>
                                            {{ $adresse->phone }}<br> <strong>Email: {{ $adresse->email }}</strong>
                                            <br><br>
                                            </a>
                                            <a href="{{ $adresse->lien_facebook }}" target="_blank"
                                                class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            <a href="{{ $adresse->lien_youtube }}" target="_blank" class="youtube"><i
                                                    class="fa fa-youtube" aria-hidden="true"></i></a>
                                            <a href="{{ $adresse->lien_linkedin }}" target="_blank" class="linkedin"
                                                aria-hidden="true"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Liens Utiles</h4>
                        <ul>
                            <li><i class="fa fa-chevron-right" aria-hidden="true"></i>
                                <a href="{{ route('front.presentation') }}">Présentation</a>
                            </li>

                            <li><i class="fa fa-chevron-right" aria-hidden="true"></i>
                                <a href="{{ route('front.realisation') }}">Réalisations</a></li>

                            <li><i class="fa fa-chevron-right" aria-hidden="true"></i>
                                <a href="{{ route('front.nos-produits') }}">Nos produits</a>
                            </li>

                            <li><i class="fa fa-chevron-right" aria-hidden="true"></i>
                                <a href="{{ ('front/client') }}">Nos clients</a>
                            </li>

                            <li><i class="fa fa-chevron-right" aria-hidden="true"></i>
                                <a href="{{ route('front.devis') }}">Demandez un dévis</a>
                            </li>

                            <li><i class="fa fa-chevron-right" aria-hidden="true"></i>
                                <a href="{{ url('front/contact') }}">Nous écrire</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Nos services</h4>
                        @if($services)
                            @foreach($services as $service)
                                <ul>
                                    @if(!is_null($service->libelle))
                                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i></i>
                                            <a
                                                href="{{ route('front.detail_service', $service->id) }}">
                                                {{ $service->libelle }}
                                            </a>
                                        </li>
                                    @endif
                                </ul>
                            @endforeach
                        @endif
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Notre Newsletter</h4>
                        <p>Enregistrez-vous et restez informés par mail de toutes nos offres promotionnelles!</p>
                        <form action="" method="post"> <input type="email" name="email"><input type="submit"
                                value="Souscrire"></form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright"> © Copyright <strong><span>Allô Service CI</span></strong>. Tous droits réservés.
            </div>
            <div class="credits"> Conçu par <a href="#" style="color:#ffff">Allô Service CI</a></div>
        </div>
    </footer>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script data-cfasync="false"
        src="{{ asset('assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}">
    </script>
    <script src="{{ asset('assets/dist/site/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/dist/site/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/dist/site/js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/dist/site/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/dist/site/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/dist/site/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/dist/site/js/typed.js') }}"></script>
    <script src="{{ asset('assets/dist/site/js/particles.js') }}"></script>
    <script src="{{ asset('assets/dist/site/js/app.js') }}"></script>
    <script src="{{ asset('assets/dist/site/js/validator.js') }}"></script>
    <script src="{{ asset('assets/dist/site/js/contact.js') }}"></script>
    <script src="{{ asset('assets/dist/site/js/main.js') }}"></script>
    {{-- <script src="{{ asset('js/share.js') }}"></script> --}}
    <script src="../www.google.com/recaptcha/apibd49.js?render=6LejwM8UAAAAAOkJXlRTNR9Om8O0LsNJNnPKAovI"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <script>
        grecaptcha.ready(function () {
            grecaptcha.execute('6LejwM8UAAAAAOkJXlRTNR9Om8O0LsNJNnPKAovI', {
                action: 'homepage'
            }).then(function (token) {
                $('#recaptcha').val(token);
            });
        });
    </script>

<script>
    $('#service_id').on('change', function () {
        let serviceId = $(this).val();

        console.log(serviceId)
        
        var userURL = "{{url('/getSpecificates')}}";
        $.ajax({
            url: userURL,
            data: {"data": serviceId},
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                console.log(data);
               
                HTML = $.parseHTML(data);
                $("#ajaxRoot").html(HTML)
            }
        });
    });
</script>

{{-- <script>
    $('#categorie_id').on('change', function () {
        let categorieId = $(this).val();

        console.log(categorieId)
        
        var userURL = "{{url('/getCategories')}}";
        $.ajax({
            url: userURL,
            data: {"data": categorieId},
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                console.log(data);
               
                HTML = $.parseHTML(data);
                $("#ajaxRoot").html(HTML)
            }
        });
    });
</script> --}}

<script>
  
</script>
</section>
</body>

</html>