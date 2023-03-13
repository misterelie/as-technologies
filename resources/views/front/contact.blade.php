@extends('layouts.base')
@section('content')

<style>
    

/*--------------------------------------------------------------
# Contact
--------------------------------------------------------------*/
section {
  padding: 60px 0;
}.section-bg {
  background-color: white;
}.section-title {
  text-align: center;
  padding-bottom: 30px;
}.section-title h2 {
  margin: 15px 0 0 0;
  font-size: 32px;
  font-weight: 700;
  color: #5f5950;
}
.section-title h2 span {
  color: #3601c6;
}
.section-title p {
  margin: 15px auto 0 auto;
  font-weight: 300;
}

@media (min-width: 1024px) {
  .section-title p {
    width: 50%;
  }
}

/*--------------------------------------------------------------
# Contact
--------------------------------------------------------------*/
.contact .info-wrap {
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  padding: 30px;
}
.contact .info {
  background: #fff;
}

.contact .info i {
  font-size: 20px;
  color: #3601c6;
  float: left;
  width: 44px;
  height: 44px;
  background: #fff6e8;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50px;
  transition: all 0.3s ease-in-out;
}
.contact .info h4 {
  padding: 0 0 0 60px;
  font-size: 18px;
  font-weight: 600;
  margin-bottom: 5px;
  color: #3601c6;
  font-family: "Poppins", sans-serif;
}
.contact .info p {
  padding: 0 0 0 60px;
  margin-bottom: 0;
  font-size: 14px;
  color: #000;
}

.contact .info:hover i {
  background: #3601c6;
  color: #fff;
}
.contact .php-email-form {
  width: 100%;
  box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12);
  padding: 30px;
  background: #fff;
}
.contact .php-email-form .form-group {
  padding-bottom: 8px;
}
.contact .php-email-form input,
.contact .php-email-form textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
}
.contact .php-email-form input {
  height: 44px;
}
.contact .php-email-form textarea {
  padding: 10px 12px;
}
.contact .php-email-form button[type=submit] {
  background: #3601c6;
  border: 0;
  padding: 10px 24px;
  color: #fff;
  transition: 0.4s;
  border-radius: 50px;
  text-transform: uppercase;
}
.contact .php-email-form button[type=submit]:hover {
  background: green;
  text-transform: uppercase;
  
}
</style>

<section id="contact" class="contact">
    <div class="container">
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
        <div class="section-title">
            <h2><span>Contactez</span>-Nous</h2>
            <p style="color:red; font-weight:bold">Vous pouvez nous écrire  en nous laissant un message</p>
        </div>
    </div>

    <div class="container mt-5">
        <div class="info-wrap">
            <div class="row">
                @if(!is_null($adresses))
                @foreach($adresses as $adresse)
                    <div class="col-lg-3 col-md-6 info">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <h4>Notre adresse:</h4>
                        <p>{{ $adresse->adresse }}</p>
                    </div>

                    <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <h4>Email:</h4>
                        <p>{{  $adresse->email }}</p>
                    </div>

                    <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <h4>Appelez-nous:</h4>
                        <p>{{  $adresse->phone }}<br></p>
                    </div>
                 @endforeach
                 @endif
            </div>
        </div>


        <form action="{{ route('message_contact') }}" method="post" 
            role="form" enctype="multipart/form-data" class="php-email-form">
            @csrf
            
            <div class="row">
                <div class="col-md-6 form-group">
                    <input type="text" name="nom" class="form-control" id="nom" placeholder="Saisissez votre nom & prénoms" required="">
                    @error('nom')
                        <span class="text-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-md-6 form-group">
                    <input type="email" class="form-control" value="{{ old('email') }}" name="email" id="email" placeholder="Saisissez votre adresse email" required="">
                    @error('email')
                        <span class="text-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 form-group">
                    <input type="number" name="telephone"  value="{{ old('telephone') }}" class="form-control" id="telephone" placeholder="Saisissez votre numéro de téléphone" required="">
                    @error('telephone')
                        <span class="text-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                   @enderror
                </div>

                <div class="col-md-6 form-group">
                    <input type="text" class="form-control" value="{{ old('objet') }}" name="objet" id="objet" placeholder="Saisissez l'objet de votre message" required="">
                    @error('objet')
                        <span class="text-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                   @enderror
                </div>
            </div>  
            <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" 
                    placeholder="Ecrivez votre message ici !" required=""></textarea>
                    @error('message')
                        <span class="text-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                   @enderror
            </div>
            <div class="text-center"><button type="submit">Envoyer votre message</button></div>
        </form>
    </div>

</section>
@yield('js')
@endsection