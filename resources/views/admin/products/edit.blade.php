@extends('layouts.contentlayout')
@section('content')
<div class="article">
    <div class="container">
      <h1>{{$bike->naam}}</h1>


    <form method="post" class="w-100">


            <div class="row">
                <div class="col-12 form-group">
                    <label  class="contact__label" for="InputEmail"> Naam</label>
                    <input type="email" class="form-control" name="e-mail" id="InputEmail" aria-describedby="email"
                           value="{{$bike->naam}}" required>
                </div>
                <div class="col-12 form-group">
                    <label  class="contact__label" for="InputEmail"> Prijs:</label>
                    <input type="email" class="form-control" name="e-mail" id="InputEmail" aria-describedby="email"
                           value="{{$bike->prijs}}">
                </div>
                <div class="col-12 form-group">
                    <label  class="contact__label" for="InputEmail"> Aanbiedingsprijs:</label>
                    <input type="email" class="form-control" name="e-mail" id="InputEmail" aria-describedby="email"
                           value="{{$bike->aanbiedingsprijs}}" required>
                </div>

                <div class="col-12 form-group">
                    <label class="contact__label" for="InputFirstname">Omschrijving</label>

                    <textarea class="form-control" name="omschrijving" id="" cols="30" rows="10">{{$bike->omschrijving}}</textarea>
                </div>
                <div class="col-12 form-group">
                    <label class="contact__label" for="InputLastname">Versnellingen</label>
                    <input type="number" class="form-control" name="phonenumber" id="InputLastname"
                           aria-describedby="Achternaam" value="{{$bike->versnellingen}}">
                </div>
                <div class="col-12 form-group">
                    <select class="form-control" name="ontvanger">
                        <option value="{{$categorySelected->id}}">{{ $categorySelected->Naam }}</option>

                    @foreach($categories as $category)
                        @if($category != $categorySelected)
                            <option value="{{$category->id}}">{{ $category->Naam }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
    </form>
    </div>
</div>
@endsection