@extends('layouts.contentlayout')
@section('content')
    <div class="article">
        <div class="container">
            <h1>Voeg fiets toe</h1>


            <form method="post" class="w-100">
                @csrf


                <div class="row">
                    <div class="col-12 form-group">
                        <label  class="contact__label" for="inputName"> Naam</label>
                        <input type="text" class="form-control" name="naam" id="text" aria-describedby="text"
                                required>
                    </div>
                    <div class="col-12 form-group">
                        <label  class="contact__label" for="inputName"> Merk</label>
                        <input type="text" class="form-control" name="merk" id="InputEmail" aria-describedby="email"
                               required>
                    </div>
                    <div class="col-12 form-group">
                        <label  class="contact__label" for="inputName"> Kgileur</label>
                        <input type="text" class="form-control" name="kleur" id="InputEmail" aria-describedby="email"
                               required>
                    </div>
                    <div class="col-12 form-group">
                        <label  class="contact__label" for="InputEmail"> Prijs:</label>
                        <input type="text" class="form-control" name="prijs" id="InputEmail" aria-describedby="email"
                               >
                    </div>
                    <div class="col-12 form-group">
                        <label  class="contact__label" for="InputEmail"> Aanbiedingsprijs:</label>
                        <input type="text" class="form-control" name="aanbieding" id="InputEmail" aria-describedby="email"
                                required>
                    </div>

                    <div class="col-12 form-group">
                        <label class="contact__label" for="InputFirstname">Omschrijving</label>

                        <textarea class="form-control" name="omschrijving" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="col-12 form-group">
                        <label class="contact__label" for="InputLastname">Versnellingen</label>
                        <input type="number" class="form-control" name="versnellingen" id="InputLastname"
                               aria-describedby="Achternaam">
                    </div>
                    <div class="col-12 form-group">
                        <select class="form-control" name="type">

                            @foreach($categories as $category)

                                    <option value="{{$category->id}}">{{ $category->Naam }}</option>

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