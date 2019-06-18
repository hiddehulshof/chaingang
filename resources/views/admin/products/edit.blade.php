@extends('layouts.contentlayout')
@section('content')
<div class="article">
    <div class="container">
      <h1>{{$bike->naam}}</h1>


    <form method="post" action="edit/{{$bike->id}}}" class="w-100">
   @csrf


        <div class="row">
                <div class="col-12 form-group">
                    <label  class="contact__label" for="InputEmail"> Naam</label>
                    <input type="text" class="form-control" name="naam" id="InputNaam" aria-describedby="naam"
                           value="{{$bike->naam}}" required>
                </div>
                <div class="col-12 form-group">
                    <label  class="contact__label" for="InputEmail"> Prijs:</label>
                    <input type="number" class="form-control" name="prijs" id="Prijs" aria-describedby="Prijs"
                           value="{{$bike->prijs}}">
                </div>
                <div class="col-12 form-group">
                    <label  class="contact__label" for="InputEmail"> Aanbiedingsprijs:</label>
                    <input type="number" class="form-control" name="aanbieding" id="InputEmail" aria-describedby="email"
                           value="{{$bike->aanbiedingsprijs}}" >
                </div>
            <div class="col-12 form-group">
                <label  class="contact__label" for="InputEmail"> Aanbiedingsprijs:</label>
                <input type="text" class="form-control" name="merk" id="InputEmail" aria-describedby="email"
                       value="{{$bike->merk}}" >
            </div>
            <div class="col-12 form-group">
                <label  class="contact__label" for="InputEmail"> Aanbiedingsprijs:</label>
                <input type="text" class="form-control" name="kleur" id="InputEmail" aria-describedby="email"
                       value="{{$bike->kleur}}" >
            </div>

                <div class="col-12 form-group">
                    <label class="contact__label" for="InputFirstname">Omschrijving</label>

                    <textarea class="form-control" name="omschrijving" id="" cols="30" rows="10">{{$bike->omschrijving}}</textarea>
                </div>
                <div class="col-12 form-group">
                    <label class="contact__label" for="InputLastname">Versnellingen</label>
                    <input type="number" class="form-control" name="versnellingen" id="InputLastname"
                           aria-describedby="Achternaam" value="{{$bike->versnellingen}}">
                </div>
                <div class="col-12 form-group">
                    <select class="form-control" name="type">
                        <option value="{{$categorySelected->id}}">{{ $categorySelected->Naam }}</option>

                    @foreach($categories as $category)
                        @if($category != $categorySelected)
                            <option value="{{$category->id}}">{{ $category->Naam }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div class="col-12 form-group">

                    <button type="submit" class="button is-link">Opslaan</button>

                </div>
            </div>
    </form>
    </div>
</div>
@endsection