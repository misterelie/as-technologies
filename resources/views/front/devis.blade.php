@extends('layouts.base')
@section('content')

<style>
    .section-title h2 span {
        color: #3601c6;
    }

    .section-title h2 {
        margin: 15px 0 0 0;
        font-size: 32px;
        font-weight: 700;
        color: #5f5950;
    }

    .section-title {
        text-align: center;
        padding-bottom: 30px;
    }

    section {
        padding: 60px 0;
    }

    .section-title p {
        font-weight: bold;
        margin: 15px auto 0px;
        color: red;
        font-size: 13px;
    }

    .book-a-table .php-email-form {
        width: 100%;
        box-shadow: rgba(0, 0, 0, 0.12) 0px 0px 24px 0px;
        padding: 30px;
        background: rgb(255, 255, 255);
    }

    form {
        display: block;
        margin-top: 0em;
    }

    <blade media|%20(min-width%3A%201024px)%20%7B%0D>.section-title p {
        width: 50%;
    }
    }

    .contact .info-wrap {
        box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
        padding: 30px;
    }

    .row {
        --bs-gutter-x: 1.5rem;
        --bs-gutter-y: 0;
        display: flex;
        flex-wrap: wrap;
        margin-top: calc(-1 * var(--bs-gutter-y));
        margin-right: calc(-0.5 * var(--bs-gutter-x));
        margin-left: calc(-0.5 * var(--bs-gutter-x));
    }

    .book-a-table .php-email-form .form-group {
        padding-bottom: 8px;
    }

    .book-a-table .php-email-form input {
        height: 44px;
    }

    .book-a-table .php-email-form input,
    .book-a-table .php-email-form textarea {
        box-shadow: none;
        font-size: 14px;
        border-radius: 0px;
    }

    .book-a-table .php-email-form .validate {
        display: none;
        color: red;
        font-weight: 400;
        font-size: 13px;
        margin: 0px 0px 15px;
    }

    .mt-3 {
        margin-top: 1rem !important;
    }

    .mb-3 {
        margin-bottom: 1rem !important;
    }

    .book-a-table .php-email-form .loading {
        display: none;
        text-align: center;
        background: rgb(255, 255, 255);
        padding: 15px;
    }

    .book-a-table .php-email-form textarea {
        padding: 10px 12px;
    }

    textarea.form-control {
        min-height: calc(1.5em + 0.75rem + 2px);
    }

    .book-a-table .php-email-form .error-message {
        display: none;
        color: rgb(255, 255, 255);
        text-align: left;
        font-weight: 600;
        background: rgb(237, 60, 13);
        padding: 15px;
    }

    .book-a-table .php-email-form .sent-message {
        display: none;
        color: rgb(255, 255, 255);
        text-align: center;
        font-weight: 600;
        background: rgb(24, 210, 110);
        padding: 15px;
    }

    .text-center {
        text-align: center !important;
    }

    .book-a-table .php-email-form button[type="submit"] {
        color: rgb(255, 255, 255);
        background: #3601c6;
        border-width: 0px;
        border-style: initial;
        border-color: initial;
        border-image: initial;
        padding: 10px 24px;
        transition: all 0.4s ease 0s;
        border-radius: 50px;
    }

    button,
    input,
    optgroup,
    select,
    textarea {
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
        margin: 0px;
    }

    [type="button"]:not(:disabled),
    [type="reset"]:not(:disabled),
    [type="submit"]:not(:disabled),
    button:not(:disabled) {
        cursor: pointer;
    }
</style>

<section id="book-a-table" class="book-a-table">
    <div class="container">
        <div class="section-title">
            <div class="form-group ">
                <!--AFFICHER LE MESSAGE DE SUCCESS-->
                @if($message = Session::get('success'))
                    <div class="alert alert-success">
                        <h5 class="text-center text-uppercase">{{ $message }}</p>
                    </div>
                @endif

                @if($message = Session::get('error'))
                    <div class="alert alert-danger">
                        <h5 class="text-center">{{ $message }}</h5>
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

            <h2>Demandez un <span>devis</span></h2>
            <p>
                NB: Les champs marqués par une étoile sont obligatoires .
            </p>
        </div>
        <form action="{{ route('store.devis') }}" method="post" role="form" class="php-email-form"
            enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                    <label for="">Votre nom ou raison sociale </label> <span style="color:red">(*)</span>
                    <input type="text" name="nom" class="form-control" id="nom"
                        placeholder="Votre nom ou raison sociale" required="">
                </div>
                @error('nom')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                    <label for="">Votre adresse email </label> <span style="color:red">(*)
                        <input type="email" class="form-control" name="adresse_email" id="adresse_email"
                            placeholder="Votre adresse email" required>
                </div>
                @error('adresse_email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                    <label for="">Votre numéro de téléphone </label> <span style="color:red">(*)
                        <input type="tel" class="form-control" name="telephone" id="telephone"
                            placeholder="Votre numéro de téléphone" required>
                </div>
                @error('telephone')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <label for="">Votre ville ou commune </label> <span style="color:red">(*)
                        <input type="text" name="ville" class="form-control" id="ville"
                            placeholder="Veuillez saisir votre ville ou commune" required>
                </div>
                @error('ville')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <label for="">Votre pays : </label> <span style="color:red">(*)
                        <input type="text" class="form-control" name="pays" id="pays"
                            placeholder="Veuillez saisir le nom de votre pays" required>
                </div>
                @error('pays')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <label for="">Sélectionnez le service </label> <span style="color:red">(*)
                        {{ (old('service')) }}
                        <select class="form-select form-control" name="service_id" id="service_id" required>
                            <option value="Veuillez choisir le service">Veuillez choisir le service</option>
                            @if(!is_null($services))
                                @foreach($services as $service)
                                    <option value="{{ $service->id }}"
                                        {{ !is_null(old("service")) ? 'selected' : '' }}>
                                        {{ Str::ucfirst($service->libelle) }}
                                    </option>
                                @endforeach
                            @endif
                        </select>
                </div>
                @error('service_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <label for="specificite_id">Sélectionnez la spécificité du service : </label>
                    <div id="ajaxRoot">
                        <select name="" id=""class="form-control">
                            <option value="" ></option>
                        </select>
                    </div>
                </div>

                @error('specificite_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                
                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <label for="">Précisez le délai de livraison souhaitée : </label>
                    <input type="date" class="form-control" name="delai_livraison" id="delai_livraison"
                        placeholder="Précisez votre délai de livraison">
                </div>
                @error('date')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <label for="">Charger un fichier : </label>
                    <input type="file" class="form-control" name="fichier_devis" id="fichier_devis" placeholder="">
                </div>
                @error('fichier_devis')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group mt-3">
                <label for="description_detaillee">Description détaillée du dévis </label> <span style="color:red">(*)
                    <textarea class="form-control" name="description_detaillee" rows="5"
                        placeholder="Veuillez saisir la description détaillée de votre dévis"></textarea>
            </div>
            @error('description_detaillee')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <div class="text-center"><button type="submit">Envoyer votre devis</button></div>
        </form>
    </div><br><br>
</section>
@yield('js')
@endsection