@extends('layouts.contentlayout')
@section('content')

    <div class="admin-article">

        <div class="container">
            <div class="article">
                <a href="/admin"><button class="button float-left"><i class="fas fa-arrow-left pr-2 ml-0"></i>Terug</button></a>
            </div>
            <h3>Ingeschreven voor nieuwsbrief</h3>
            <table>
                <thead>
                <tr>
                    <th>Email</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($newsletters as $newsletter)


                    <tr class="font-weight-bolder">
                        <td> <b>{{$newsletter->Email}}</b></td>
                        <td>

                            <a  href="delete/{{$newsletter->id}}"><button onclick="return confirm('Weet je het zeker?')" class="button button__delete"><i class="fa fa-trash"></i></button></a>


                        </td>
                    </tr>
                @endforeach


                </tbody>
                {{$newsletters->links()}}
            </table>

        </div>
    </div>

@endsection
