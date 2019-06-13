@extends('layouts.contentlayout')
@section('content')
<div class="article">
    <div class="container">
      <h1>{{$user->gebruikersnaam}}</h1>


    <form method="post" class="w-100">


            <div class="row">
                <div class="col-12 form-group">
                    <label  class="contact__label" for="InputEmail"> Naam</label>
                    <input type="email" class="form-control" name="e-mail" id="InputEmail" aria-describedby="email"
                           value="{{$user->gebruikersnaam}}" required>
                </div>
                <div class="col-12 form-group">
                    <label  class="contact__label" for="InputEmail"> Prijs:</label>
                    <input type="email" class="form-control" name="e-mail" id="InputEmail" aria-describedby="email"
                           value="{{$user->voornaam}}">
                </div>
                <div class="col-12 form-group">
                    <label  class="contact__label" for="InputEmail"> Aanbiedingsprijs:</label>
                    <input type="email" class="form-control" name="e-mail" id="InputEmail" aria-describedby="email"
                           value="{{$user->achternaam}}" required>
                </div>

                <div class="col-12 form-group">
                    <label class="contact__label" for="InputFirstname">Omschrijving</label>

                    <textarea class="form-control" name="omschrijving" id="" cols="30" rows="10">{{$user->email}}</textarea>
                </div>
                <div class="col-12 form-group">
                    <label class="contact__label" for="InputLastname">Versnellingen</label>
                    <input type="number" class="form-control" name="phonenumber" id="InputLastname"
                           aria-describedby="Achternaam" value="{{$user->telefoonNr}}">
                </div>

            </div>
    </form>
    </div>
</div>
@endsection