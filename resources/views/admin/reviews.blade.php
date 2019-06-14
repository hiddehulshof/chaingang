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
                    <th>Titel</th>
                    <th>Inhoud</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($reviews as $review)


                    <tr class="font-weight-bolder">
                        <td> <b>{{$review->Titel}}</b></td>

                        <td> {{$review->Text}}</td>
                        <td>

                                <a  href="{{$review->id}}" ><button class="button"><i class="fa fa-ellipsis-h"></i></button></a>

                        </td>
                    </tr>
                @endforeach


                </tbody>
            </table>

        </div>
    </div>

@endsection
