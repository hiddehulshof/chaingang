@extends('layouts.contentlayout')
@section('content')

    <div class="admin-article">
        <div class="container">
            <table>
                <thead>
                <tr>
                    <th>Naam</th>
                    <th>Prijs</th>
                    <th>Omschrijving</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($bikes as $bike)


                    <tr class="font-weight-bolder">
                        <td> {{$bike->naam}}</td>
                        <td> &euro;{{$bike->prijs}}</td>
                        <td> {{$bike->omschrijving}}</td>
                        <td>
                            <div class="buttons">
                                <a  href="{{$bike->id}}"><button class="button"><i class="fa fa-edit"></i></button></a>
                                <a  href="delete/{{$bike->id}}"><button class="button button__delete"><i class="fa fa-trash"></i></button></a>
                            </div>
                        </td>
                    </tr>
                @endforeach


                </tbody>
            </table>
            <div class="article">
                <button class="button"> Voeg product toe</button>
            </div>
        </div>
    </div>

@endsection
