@extends('layouts.contentlayout')
@section('content')

    <div class="admin-article">
        <div class="container">
            <table>
                <thead>
                <tr>
                    <th>Voornaam</th>
                    <th>Tussenvoegsel</th>
                    <th>Achternaam</th>
                    <th>Email</th>

                    <th>Gebruikersnaam</th>

                    <th>Rol</th>

                    <th>Telefoon nummer</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)


                    <tr class="font-weight-bolder">
                        <td> {{$user->voornaam}}</td>
                        <td> {{$user->tussenvoegsel}}</td>
                        <td> {{$user->achternaam}}</td>


                        <td> {{$user->email}}</td>
                        <td> {{$user->gebruikersnaam}}</td>
                        <td> @if($user->admin == 1)
                                 Administrator
                                 @else
                                 Gebruiker
                                 @endif
                        </td>
                        <td> {{$user->telefoonNr}}</td>
                        <td>
                            <div class="buttons">
                                <a  href="{{$user->id}}"><button class="button"><i class="fa fa-edit"></i></button></a>

                                <a  href="delete/{{$user->id}}"><button class="button button__delete"><i class="fa fa-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                @endforeach


                </tbody>
            </table>
            <div class="article">
                <button class="button"> Voeg gebruiker toe</button>
            </div>
        </div>
    </div>

@endsection
