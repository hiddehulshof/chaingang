@extends('layouts.contentlayout')
@section('content')
<div class="article">
    <div class="container">
      <h1>{{$user->name}}</h1>


    <form method="post" class="w-100" action="edit/{{$user->id}}}">
@csrf
            <div class="row">
              <div class="col-12 form-group">
                <label for="firstname"class="contact__label">Gebruikersnaam</label>


                    <input id="gebruikersnaam" type="text" class="form-control @error('firstname') is-invalid @enderror"
                           name="gebruikersnaam"
                           value="{{$user->name}}" required autocomplete="firstname" autofocus>

            </div>
                <div class="col-12 form-group">
                <label for="between" class="contact__label">Voornaam</label>


                    <input id="between" type="text" class="form-control "
                           name="voornaam"
                           value="{{$user->Voornaam}}"  autocomplete="between" autofocus>
            </div>

                <div class="col-12 form-group">
                    <label for="between" class="contact__label">Tussenvoegsel</label>


                    <input id="between" type="text" class="form-control "
                           name="tussenvoegsel"
                           value="{{$user->Tussenvoegsel}}"  autocomplete="between" autofocus>
                </div>
                <div class="col-12 form-group">
                <label for="lastname" class="contact__label">Achternaam</label>


                    <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror"
                           name="achternaam"
                           value="{{$user->Achternaam}}" required autocomplete="lastname" autofocus>

            </div>
                <div class="col-12 form-group">
                <label for="email"
                       class="contact__label">{{ __('Email-adres') }}</label>


                    <input id="email" type="email" class="form-control"
                           name="email"    value="{{$user->email}}" required autocomplete="email">


            </div>
                <div class="col-12 form-group">
                <label for="telephone"
                       class="contact__label">{{ __('Telefoonnummer') }}</label>


                    <input id="telephone" type="tel" class="form-control"
                           name="telephone" value="{{$user->TelefoonNR}}"  required autocomplete="email">



            </div>

                <div class="col-12 form-group">
                <label for="street"
                       class="contact__label">{{ __('Straat') }}</label>


                    <input id="street" type="text" class="form-control"
                           name="street" value="{{$user->Straat}}"  required >

            </div>

                <div class="col-12 form-group">
                <label for="housenumber"
                       class="contact__label">{{ __('Huisnummer') }}</label>


                    <input id="housenumber" type="text" class="form-control"
                           name="housenumber" value="{{$user->Huisnr}}" required >

            </div>

                <div class="col-12 form-group">
                <label for="zipcode"
                       class="contact__label">{{ __('Postcode') }}</label>


                    <input id="zipcode" type="text" class="form-control"
                           name="zipcode" value="{{$user->Postcode}}"  required >

            </div>

                <div class="col-12 form-group">
                <label for="city"
                       class="contact__label">{{ __('Plaats') }}</label>


                    <input id="city" type="text" class="form-control"
                           name="city" value="{{$user->Plaats}}"  required >

            </div>
            </div>
        <div class="col-12 form-group">

            <button type="submit" class="button is-link">Opslaan</button>

        </div>

    </form>
    </div>
</div>
@endsection