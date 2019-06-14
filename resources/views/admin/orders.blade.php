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
                    <th>Ordernummer</th>
                    <th>Klant adres</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)


                    <tr class="font-weight-bolder">
                        <td> {{$order->id}}</td>

                        <td> {{$order->plaats}}</td>
                        <td> {{$order->postcode}}</td>
                        <td> {{$order->straat}}</td>
                        <td> {{$order->huisnr}}</td>
                        <td>
                            <div class="buttons">
                                <a  href="{{$order->id}}" ><button class="button"><i class="fa fa-edit"></i></button></a>
                                <a  href="delete/{{$order->id}}"><button onclick="return confirm('Weet je het zeker?')" class="button button__delete"><i class="fa fa-trash"></i></button></a>
                            </div>
                        </td>
                    </tr>
                @endforeach


                </tbody>
            </table>
            {{$orders->links()}}

        </div>
    </div>

@endsection
