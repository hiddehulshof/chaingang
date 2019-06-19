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
                        <td> {{$user->Voornaam}}</td>
                        <td> {{$user->Tussenvoegsel}}</td>
                        <td> {{$user->Achternaam}}</td>


                        <td> {{$user->Email}}</td>
                        <td> {{$user->Gebruikersnaam}}</td>
                        {{--<td> @if($user->isAdmin == 1)--}}
                                 {{--Administrator--}}
                                 {{--@else--}}
                                 {{--Gebruiker--}}
                                 {{--@endif--}}
                        {{--</td>--}}
                        <td>
                            @if($user->isEmployee)
                                @if($user->isAdmin)
                                Administrator
                                @else
                                Medewerker
                                @endif
                            @else
                            Klant
                            @endif

                        </td>
                        <td> {{$user->telefoonNr}}</td>
                        <td>
                            @if($user->isEmployee == false || $currentUser->isAdmin || $user->id == $currentUser->id)
                                <div class="buttons">
                                    <a  href="{{$user->id}}"><button class="button"><i class="fa fa-edit"></i></button></a>

                                    <a  href="delete/{{$user->id}}"><button class="button button__delete"><i class="fa fa-trash"></i></button></a>
                                </div>
                            @endif
                        </td>
                    </tr>
                @endforeach


                </tbody>
            </table>
            {{$users->links()}}
            <div class="article">
                @if ($currentUser->isAdmin)
                    <button class="button"> Voeg gebruiker toe</button>
                @endif
            </div>
        </div>
    </div>

@endsection
