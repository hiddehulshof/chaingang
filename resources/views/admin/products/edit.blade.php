
@extends('layouts.contentlayout')
@section('content')
    <div class="article">
        <div class="container">
            <h1>{{$bike->name}}</h1>


            <form method="post" enctype="multipart/form-data" action="edit/{{$bike->id}}}" class="w-100">
                @csrf


                <div class="row">
                    <div class="col-12 form-group">
                        <label  class="contact__label" for="inputName"> Naam</label>
                        <input type="text" class="form-control" name="naam" id="text" aria-describedby="text" value="{{$bike->naam}}"
                               required>
                    </div>
                    <div class="col-12 form-group">
                        <label  class="contact__label" for="inputName"> Merk</label>
                        <input type="text" class="form-control" name="merk" id="InputEmail" aria-describedby="email" value="{{$bike->merk}}"
                               required>
                    </div>
                    <div class="col-12 form-group">
                        <label  class="contact__label" for="inputName"> Kleur</label>
                        <input type="text" class="form-control" name="kleur" id="InputEmail" aria-describedby="email" value="{{$bike->kleur}}"
                               required>
                    </div>
                    <div class="col-12 form-group">
                        <label  class="contact__label" for="InputEmail"> Prijs:</label>
                        <input type="text" class="form-control" name="prijs" id="InputEmail" aria-describedby="email" value="{{$bike->prijs}}"
                        >
                    </div>
                    <div class="col-12 form-group">
                        <label  class="contact__label" for="InputEmail"> Aanbiedingsprijs:</label>
                        <input type="text" class="form-control" name="aanbieding" id="InputEmail" aria-describedby="email" value="{{$bike->aanbiedingsprijs}}"
                               required>
                    </div>

                    <div class="col-12 form-group">
                        <label class="contact__label" for="InputFirstname">Omschrijving</label>

                        <textarea class="form-control" name="omschrijving"  id="" cols="30" rows="10" >{{$bike->naam}}</textarea>
                    </div>
                    <div class="col-12 form-group">
                        <label class="contact__label" for="InputLastname">Versnellingen</label>
                        <input type="number" class="form-control" name="versnellingen" id="InputLastname" value="{{$bike->versnellingen}}"
                               aria-describedby="Achternaam">
                    </div>
                    <div class="col-12 form-group">
                        <label class="contact__label" for="InputLastname">Type</label>

                        <select class="form-control" name="type">

                            @foreach($categories as $category)

                                <option value="{{$category->id}}">{{ $category->Naam }}</option>

                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 form-group">
                        <label class="contact__label" for="InputLastname">Bagagedrager</label>

                        <select class="form-control" name="bagagedrager">

                                <option value="1">Ja</option>
                                <option value="0">Nee</option>


                        </select>
                    </div>

                    <div class="input-group control-group increment" >
                        <input type="file" name="filename[]" class="form-control">
                        <div class="input-group-btn">
                            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                        </div>
                    </div>
                    <div class="clone" style="display: none">
                        <div class="control-group input-group" style="margin-top:10px">
                            <input type="file" name="filename[]" class="form-control">
                            <div class="input-group-btn">
                                <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 form-group">

                        <button type="submit" class="button is-link">Opslaan</button>

                    </div>
                </div>
            </form>
            @foreach($images as $image)
                @if($bike->id == $image->FietsID)
                    <div class="d-flex flex-column w-25">
                        <img class="img-thumbnail" src="{{url("images/$image->Filename")}}">
                        <a href="delete/picture/{{$image->id}}">
                            <button type="button" class="btn btn-danger">Delete</button>
                        </a>
                    </div>
                @endif
            @endforeach
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
@endsection
