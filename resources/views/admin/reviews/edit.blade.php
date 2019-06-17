@extends('layouts.contentlayout')
@section('content')
    <div class="admin-article">

        <div class="container">
            <div class="article">
                <a href="/admin"><button class="button float-left"><i class="fas fa-arrow-left pr-2 ml-0"></i>Terug</button></a>
            </div>

    <table>
        <thead>
        <tr>
            <th><h3 class="p-3">Review gegevens</h3></th>
            <th><h3 class="p-3"></h3></th>
            <th></th>
            <th></th>

            <th></th>

        </tr>
        </thead>



        <tr class="font-weight-bolder">
            <td class="p-3"> Voornaam</td>

            <td class="p-3"> {{$customer->Voornaam}}</td>
        </tr>
        <tr class="font-weight-bolder">
            <td class="p-3"> Achternaam</td>

            <td class="p-3"> {{$customer->Achternaam}}</td>
        </tr>
        <tr class="font-weight-bolder">
            <td class="p-3"> Email</td>

            <td class="p-3"> {{$customer->Email}}</td>
        </tr>

        <thead>
        <tr>
            <th><h5 class="p-3">Titel</h5></th>
            <th><h5 class="p-3">Inhoud</h5></th>
            <th></th>
            <th></th>

            <th></th>

        </tr>
        </thead>

        <tr class="font-weight-bolder">
            <td class="p-3">{{$review->Titel}}</td>
            <td class="p-3">{{$review->Text}}</td>
            <td></td>

        </tr>
    </table>

        </div>
    </div>
@endsection