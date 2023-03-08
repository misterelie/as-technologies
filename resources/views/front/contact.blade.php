@extends('layouts.base')
@section('content')

<style>
    section {
        padding: 60px 0;
        overflow: hidden;
        position: relative;
    }

    .section-title {
        text-align: center;
        padding-bottom: 30px;
        position: relative;
    }

    .section-title h2 {
        font-size: 32px;
        font-weight: bold;
        text-transform: uppercase;
        margin-bottom: 20px;
        padding-bottom: 20px;
        position: relative;
    }

    .section-title p {
        margin-bottom: 0;
    }

    .contact .info-box {
        color: #444444;
        text-align: center;
        box-shadow: 0 0 30px rgb(214 215 216 / 60%);
        padding: 30px 0 32px 0;
        margin-bottom: 10px;
        border-radius: 5px;
    }

    .contact .info-box i {
        width: 50px;
        font-size: 32px;
        color: #3601c6;
        border-radius: 50%;
        padding: 8px;
        border: 2px dotted #f8d4d5;
        height: 50px;
    }

    .contact .info-box h3 {
        font-size: 20px;
        color: #777777;
        font-weight: 700;
        margin: 10px 0;
    }

    .contact .info-box p {
        padding: 0;
        line-height: 24px;
        font-size: 14px;
        margin-bottom: 0;
    }

    .contact .info-box h3 {
        font-size: 20px;
        color: #777777;
        font-weight: 700;
        margin: 10px 0;
    }

    .contact .php-email-form {
        box-shadow: 0 0 30px rgb(214 215 216 / 60%);
        padding: 30px;
        border-radius: 4px;
    }

    .contact .php-email-form .form-group {
        margin-bottom: 25px;
    }

    .contact .php-email-form input {
        padding: 10px 15px;
    }

    .contact .php-email-form input,
    .contact .php-email-form textarea {
        box-shadow: none;
        font-size: 14px;
        border-radius: 4px;
    }

    .contact .php-email-form .form-group {
        margin-bottom: 25px;
    }

    .form-control {
        display: block;
        width: 100%;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        appearance: none;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

    .my-3 {
        margin-top: 1rem !important;
        margin-bottom: 1rem !important;
    }

    .contact .php-email-form textarea {
        padding: 12px 15px;
    }

    .contact .php-email-form .loading {
        display: none;
        background: #fff;
        text-align: center;
        padding: 15px;
    }

    .contact .php-email-form .error-message {
        display: none;
        color: #fff;
        background: #3601c6;
        text-align: left;
        padding: 15px;
        font-weight: 600;
    }

    .contact .php-email-form .sent-message {
        display: none;
        color: #fff;
        background: #18d26e;
        text-align: center;
        padding: 15px;
        font-weight: 600;
    }

    .text-center {
        text-align: center !important;
    }.contact .php-email-form button[type=submit] {
        background: #3601c6;
        border: 0;
        padding: 10px 32px;
        color: #fff;
        transition: 0.4s;
        border-radius: 4px;
    }.tittle-center{
        text-align: center;
        margin-bottom: 50px;
        font-weight: 700;
    }.section-title{

    }
</style>

<section id="contact" class="contact">
    <div class="container aos-init aos-animate" data-aos="fade-up">
        <div class="section-title">
            <h2>CONTACTEZ-NOUS</h2>
        </div>
        <div class="row aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="info-box"><i class="fa fa-map-marker" aria-hidden="true"></i>
                            <h3>Notre adresse</h3>
                            <p>Abidjan, Cocody Riviera Palmeraie</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box mt-4"> <i class="fa fa-envelope" aria-hidden="true"></i>
                            <h3>Envoyez-nous un courriel</h3>
                            <p>technologies@alloservice.ci</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box mt-4"> <i class="fa fa-phone" aria-hidden="true"></i>
                            <h3>Appelez-nous</h3>
                            <p><br> +225 27 22 26 88 43</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <form action="{{route('message_contact')}}" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group ">
                        @if($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p class="text-center text-uppercase">{{ $message }}</p>
                        </div>
                    @endif
    
                    @if($message = Session::get('error'))
                        <div class="alert alert-danger">
                            <p class="text-center">{{ $message }}</p>
                        </div>
                    @endif <br><br>
    
                     <!--AFFICHER LE MESSAGE D'ERROR-->
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <p>Oups</p> Il y a eu des problèmes avec votre entrée.<br><br>
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{  $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                <!--EN ERROR-->
                    </div>
                    
                    <div class="row">
                        <h2 class="tittle-center">Nous écrire</h2>
                        <div class="col form-group"> <input type="text" name="nom" class="form-control" id="name" value="{{ old('nom') }}" placeholder="Votre nom & prénom" required="">
                            @error('nom')
                                <span class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col form-group"><input type="email" class="form-control" name="email" id="email-user" value="{{ old('email') }}" placeholder="Votre adresse email" required="">
                        @error('email')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col form-group"><input type="tel" name="telephone" class="form-control" value="{{ old('telephone') }}" id="my_phone" placeholder="Votre Téléphone" required="">
                        </div>
                        @error('telephone')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                       @enderror
                        <div class="col form-group"><input type="text" name="objet" class="form-control" id="objet" value="{{ old('objet') }}"
                                placeholder="L'objet de votre message" required="">
                                @error('objet')<span class="text-danger">{{$message }}</span>@enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col form-group"><textarea class="form-control" name="message" rows="5"
                                placeholder="Ecrivez votre message" required="">{{old('message') }} </textarea>
                                @error('message')<span class="text-danger">{{$message }}</span>@enderror
                        </div>
                    </div>
                    <div class="text-center"><button type="submit">Envoyer</button></div>
                </form>
            </div>
        </div>
    </div>
</section>
@yield('js')
@endsection