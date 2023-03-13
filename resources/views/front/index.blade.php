<!doctype html>

<html lang="fr">
<!-- Mirrored from ngomory.ci/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Jan 2023 09:23:07 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

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

    <link rel="stylesheet" href="{{ asset('assets/dist/site/css/font-awesome.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/cdn.jsdelivr.net/npm/%40mdi/font%404.7.95/css/materialdesignicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/dist/site/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/site/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/site/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/site/css/owl.theme.default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/site/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/site/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/site/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/site/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/site/css/my-style.css') }}">
</head>

<style>
    .footer-info h3 {
        color: red;
        font-size: 22px;
        font-weight: 600;
        border-left: solid #3800bf 5px;
        padding: 0 0 0 15px;
        margin-bottom: 24px;
    }

    .newsletter-form .mc-submit {
        height: 50px;
        width: 20%;
        font-weight: bold;
        color: #fff;
        background: linear-gradient(to right, #00ff66 0%, #0f0178 100%);
        border: none;
        font-size: 24px;
        position: relative;
        display: block;
        float: left;
        text-align: center;
    }

    .footer-area {
        background: #dfdfdf;
        padding: 80px 0px;
        color: #fff;
        font-size: 14px;
        float: left;
        width: 100%;
    }

    .footer-area p {
        color: #2b2b2b;
        font-size: 16px;
        font-weight: 400;
    }
</style>

<body>
    <div class="loader_bg">
        <div class="loader"></div>
    </div>
    <header class="nav-area navbar-fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-menu">
                        <div class="navbar navbar-cus">
                            <div class="navbar-header">
                                <a href="{{ url('/') }}" class="navbar-brand">AS TECHNOLOGIES</a>
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
                                        <li class="active"><a class="smoothmenu"
                                                href="{{ route('front.index') }}">Accueil</a>
                                        </li>
                                        <li><a class="smoothmenu" href="{{ route('front.presentation') }}">
                                            A propos</a>
                                        </li>
                                        <li><a class="smoothmenu" href="#resume"></a></li>
                                        <li>
                                            <a class="smoothmenu"
                                                href="{{ route('front.service') }}">Services
                                            </a>
                                        </li>

                                        <li>
                                            <a class="smoothmenu"
                                                href="{{ route('front.nos-produits') }}">Produits
                                            </a>
                                        </li>

                                        <li>
                                            <a class="smoothmenu"
                                                href="{{ route('front.realisation') }}">Réalisations
                                            </a>
                                        </li>

                                        <li><a class="smoothmenu"
                                                href="{{ url('front/client') }}">Nos clients</a>
                                        </li>
                                        <li><a class="smoothmenu"
                                                href="{{ url('front/contact') }}">Contact</a>
                                        </li>
                                        <li><a class="smoothmenu" href="{{ route('login') }}"></a>
                                        </li>
                                        <li><a class="smoothmenu" href="{{ route('register') }}"></a>
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

    <div id="home"></div>
    @if(!is_null($banniere))
        <div class="banner-area" id="slider-area" style="background-image: url(/BanniereImage/{{ $banniere->libelle }});">
            <div id="particles-js"></div>
            <div class="banner-table">
                <div class="banner-table-cell">
                    <div class="welcome-text">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-taille-40">TECHNOLOGIES & INFORMATIQUE</p>
                                    <div class="text-affect" style="background-color: #0e0e0e3b; border-radius: 10px;">
                                    </div>
                                    <hr>
                                    <p class="banner-btn">
                                        <a href="{{ route('front.devis') }}">Demandez un devis</a>
                                    </p>
                                    <div class="clearfix"></div>
                                    <div class="mouse-icon hidden-sm hidden-xs">
                                        <div class="wheel"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <style>
        .btn-read-more {
            padding: 7px 4px;
            overflow: hidden;
            border-radius: 4px;
            position: relative;
            transition: 0.5s;
            color: #fff;
            background: #3601c6;
            box-shadow: 0px 5px 25px rgb(65 84 241 / 30%);
        }span:hover{
        color: #fff;
    }.btn-read-more i {
        margin-left: 5px;
        font-size: 13px;
        transition: 0.3s;
    }.btn-read-more i:hover{
        color: #fff;
    }
    </style>
    <div id="about" class="about-area section-padding">
        <div class="container">
            <div class="row">
                @if(!is_null($about))
                        <div class="col-xs-12 col-sm-5 col-md-5">
                            @if(!is_null($about->about_image))
                                <div class="about-left wow fadeInDown" data-wow-delay="0.4s">
                                    <img src="/AboutImage/{{ $about->about_image }}" class="img-fluid" width="100px">
                                </div>
                            @endif
                        </div>
                        <div class="col-xs-12 col-sm-7 col-md-7">
                            <div class="about-right wow fadeInDown" data-wow-delay="0.8s">
                                @if(!is_null($about->sous_titre))
                                  <h1 style="color: #3601c6">{{ $about->titre }}</h1>
                                @endif

                                @if(!is_null($about->sous_titre))
                                  <h3>{{ $about->sous_titre }}</h3>
                                @endif

                                @if(!is_null($about->description))
                                    <p style="text-align: justify;">
                                        {!! $about->description !!} <br>
                                    </p>
                                @endif
                                <div class="text-start"><a href="{{ route('front.presentation') }}"
                                        style="text-decoration: none"
                                        class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>En savoir plus</span> <i class="fa fa-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                @endif
            </div>
        </div>
    </div>
    <!-- end about-->

    <div id="services" class="services-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header">
                        <h2>Nos services</h2>
                        <p class="line1"></p>
                        <p class="line2"></p>
                    </div>
                </div>
            </div>
            <div class="row">
                @if(!is_null($services))
                    @foreach($services as $key => $service)
                        <a href="{{ route('front.detail_service', $service->id) }}" 
                            style="text-decoration: none">
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="single-services text-center wow fadeInDown" data-wow-delay="0.6s">
                                    <div class="services-icon">
                                        <img src="/ServiceImage/{{ $service->image_service }}" alt=""
                                            class="imag-fluid">
                                    </div>
                                    <div class="services-content">
                                        @if(!is_null($service->libelle))
                                            <h3>{{ $service->libelle }}</h3>
                                        @endif

                                        @if(!is_null($service->resume))
                                            <h4 class="service-detail">
                                                {{ $service->resume }}
                                            </h4>
                                        @endif

                                        <div class="text-center text-start"><a href="{{ route('front.detail_service', $service->id) }}"
                                                class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                                <span>En savoir plus</span> <i class="fa fa-arrow-right"></i> </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </a>
                       
                    @endforeach
                @endif
            </div>
        </div>
    </div>

    <div id="portfolio" class="portfolio-area section-padding">
        <div class="container">
            <div class="row">
                <div class="section-header">
                    <h2>Quelques réalisations</h2>
                    <p class="line1"></p>
                    <p class="line2"></p>
                </div>
            </div>
            <div class="row">
                @if(!is_null($realisations))
                    @foreach($realisations as $realisation)
                        <div class="col-sm-4 col-md-6 col-lg-4">
                            @if(!is_null($realisation->photo_realisation))
                                <a href="#" title="" target="_blank" rel="noopener">
                                    <div class="gallery-items wow fadeInLeft" data-wow-delay="0.2s"
                                        style="margin-bottom: 15px;">
                                        <img class="img-thumbnail"
                                            src="/ServiceImage/{{ $realisation->photo_realisation }}" alt="" title="">
                                    </div>
                                </a>
                            @endif
                            @if(!is_null($realisation->libelle))
                                <h3 class="gallery-linl">{{ $realisation->libelle }}</h3>
                            @endif
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    
    <div class="invitation-area section-padding">
        <div class="container">
            @if(!is_null($projet))
                <div class="row">
                    <div class="single-invite text-center">
                        @if(!is_null($projet->titre))
                            <h2>{{ $projet->titre }} </h2>
                        @endif

                        @if(!is_null($projet->description))
                            <p>
                                {{ $projet->description }}<br>
                            </p>
                        @endif
                        <a href="{{route('front.devis')}}" class="my-btn-3">Demandez un devis</a>
                    </div>
                </div>
            @endif
        </div>
    </div>

    <div id="contact" class="contact-area section-padding">
        <div class="container">
            <div class="row">
                <div class="section-header">
                    <h2>contactez-nous</h2>
                    <p class="line1"></p>
                    <p class="line2"></p>
                </div>
            </div>
            <style>
                .contact-icon i {
                    width: 50px;
                    font-size: 32px;
                    color: #3601c6;
                    border-radius: 50%;
                    padding: 8px;
                    border: 2px dotted #f8d4d5;
                    height: 50px;
                }
            </style>

            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="top-contact">
                        @if(!is_null($adresses))
                            @foreach($adresses as $adresse)
                                <div class="row">
                                    <div class="col-sm-4 col-md-4">
                                        <div class="top-contact-text wow fadeInDown" 
                                        data-wow-delay="0.2s">
                                            <div class="contact-icon">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            </div>

                                            @if(!is_null($adresse->adresse))
                                                <h3 class="contact-h3">Adresse</h3>
                                                <h4 class="contact-h4">{{ $adresse->adresse }}</h4>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-4">
                                        <div class="top-contact-text wow fadeInDown" 
                                        data-wow-delay="0.4s">
                                            <div class="contact-icon">
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                            </div>
                                            @if(!is_null($adresse->phone))
                                                <h3 class="contact-h3">Téléphone</h3>
                                                <h4 class="contact-h4">{{ $adresse->phone }}</h4>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-4">
                                        <div class="top-contact-text wow fadeInDown" data-wow-delay="0.6s">
                                            <div class="contact-icon">
                                                <i class="fa fa-envelope" aria-hidden="true"></i></a>
                                            </div>
                                            @if(!is_null($adresse->email))
                                                <h3 class="contact-h3">E-mail</h3>
                                                <h4 class="contact-h4"><a href="">{{ $adresse->email }}</a>
                                                </h4>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                    </div>
                    @endforeach
                    @endif

                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 box-contact-form">

                </div>
            </div>
        </div>
    </div>

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
                                            <a href="{{ $adresse->lien_facebook}}" target="_blank" class="facebook"><i class="fa fa-facebook"
                                                    aria-hidden="true"></i></a>
                                            <a href="{{ $adresse->lien_youtube}}" target="_blank" class="youtube"><i class="fa fa-youtube"
                                                    aria-hidden="true"></i></a>
                                            <a href="{{ $adresse->lien_linkedin}}" target="_blank" class="linkedin" aria-hidden="true"><i
                                                    class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            @endforeach
                        @endif  
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Liens Utiles</h4>
                        <ul>
                            <li><i class="fa fa-chevron-right" aria-hidden="true"></i>
                                <a href="{{ route('front.presentation') }}">Présentation</a></li>
                            <li><i class="fa fa-chevron-right" aria-hidden="true"></i>
                                <a href="{{ route('front.realisation') }}">Réalisations</a>
                            </li>
                            <li><i class="fa fa-chevron-right" aria-hidden="true"></i>
                                <a href="{{ route('front.nos-produits') }}">Nos produits</a>
                            </li>
                            <li><i class="fa fa-chevron-right" aria-hidden="true"></i>
                                <a href="{{ ('front/client') }}">Nos clients</a></li>
                            <li><i class="fa fa-chevron-right" aria-hidden="true"></i>
                                <a href="{{ route('front.devis') }}">Demandez un dévis</a>
                            </li>
                            <li><i class="fa fa-chevron-right" aria-hidden="true"></i>
                                <a href="{{ url('front/contact') }}">Nous écrire</a></li>
                        </ul>
                    </div>
                     
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Nos services</h4>
                        @if($services)
                            @foreach($services as $service)
                                <ul>
                                    @if(!is_null($service->libelle))
                                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i></i>
                                            <a href="{{ route('front.detail_service', $service->id) }}">
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
                        <form action="" method="post"> <input type="email" name="email"><input type="submit" value="Souscrire"></form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright"> © Copyright <strong><span>Allô Service CI</span></strong>. Tous droits réservés.
            </div>
            <div class="credits">Conçu par <a href="#" style="color:#ffff">Allô Service CI</a></div>
        </div>
    </footer>

    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
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
    <script src="../www.google.com/recaptcha/apibd49.js?render=6LejwM8UAAAAAOkJXlRTNR9Om8O0LsNJNnPKAovI"></script>
    <script>
        grecaptcha.ready(function () {
            grecaptcha.execute('6LejwM8UAAAAAOkJXlRTNR9Om8O0LsNJNnPKAovI', {
                action: 'homepage'
            }).then(function (token) {
                $('#recaptcha').val(token);
            });
        });
    </script>
</body>

<!-- Mirrored from ngomory.ci/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Jan 2023 09:23:40 GMT -->

</html>