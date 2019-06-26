@extends('layouts.contentlayout')

@section('headercontent')

@endsection
@section('content')

    <div class="article">

        <div class="container">
            <h1 class="article__heading py-4">{{$bike->naam}}</h1>

            <div class="row ">

                <div class="col-md-6 py-3">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            @php($first=1)
                            @foreach($pictures as $img)
                                @if($img->FietsID == $bike->id)
                                @if($first == 1)
                                <div class="carousel-item active">
                                        <div class="product-detail-image" style="background-image: url('{{url("images/$img->Filename")}}');"></div>


                                    @php($first = 0)
                                </div>
                                @else
                                        <div class="carousel-item ">
                                            <div class="product-detail-image" style="background-image: url('{{url("images/$img->Filename")}}');"></div>



                                        </div>

                            @endif
                                @endif
                            @endforeach


                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 py-3">
                    <h5 class="article__heading">{{$bike->naam}} {{$bike->type}}</h5>
                    <p class="card-text">
                        {{$bike->omschrijving}}
                    </p>
                    <table class="table">
                        <tr>
                            <td><a class="font-weight-bold"><h3>
                                        @if ($bike->aanbiedingsprijs == 0.00)
                                         {{$bike->prijs}}
                                            @else
                                            <span style="text-decoration: line-through red">&euro;{{$bike->prijs}}</span>
                                            &euro;{{$bike->aanbiedingsprijs}}
                                            @endif
                                    </h3></a></td>
                        </tr>
                    </table>
                    @if (Session::has('success'))
                        <div class="alert alert-success">
                            <ul>
                                <li class="list-inline-item text-succes"><b>{!! \Session::get('success') !!}</b></li>
                            </ul>
                        </div>
                    @endif

                    <a href="{{ url('add-to-cart/'.$bike->id) }}" class="button">Bestel</a>

                </div>

                <div class="col-12 py-5">
                    <h3 class="article__heading py-3">Specificaties</h3>
                    <table class="table">
                        <tr>
                            <td><b>Merk</b></td>
                            <td>{{$bike->merk}}</td>
                        </tr>
                        <tr>
                            <td><b>Kleur</b></td>
                            <td>{{$bike->kleur}}</td>
                        </tr>
                        <tr>
                            <td><b>Versnellingen</b></td>
                            <td>{{$bike->versnellingen}}</td>
                        </tr>
                        <tr>
                            <td><b>Bagagedrager</b></td>
                            <td>@if($bike->bagagedrager == 1)
                                    Ja
                            @else
                                    Nee
                            @endif</td>
                        </tr>
                        <tr>
                            <td><b>Type fiets:</b></td>
                            <td>
                                @foreach($categories as $type)
                                    @if($bike->typeId == $type->id )
                                        {{$type->Naam}}
                                    @endif
                                @endforeach
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
    </div>
    @include('layouts.partials.newsletter')

@endsection
