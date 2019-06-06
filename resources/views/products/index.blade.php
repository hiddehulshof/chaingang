@extends('layouts.contentlayout')

@section('headercontent')
    <h1>Tweedehands fietsen</h1>
@endsection
@section('content')
    <div class="article products-page">
        <div class="container">
            <h1 class="article__heading">Producten</h1>

            <div class="row ">


                <div class="col-lg-6 p-2 ">
                <form class="box row" method="POST" action="/products">
                        @csrf
                    <div class="col-lg-6 ">
                        <div class="field mb-2 mt-2">
                            <div class="control">
                                <input type="text" class="form-control" name="search"
                                       aria-describedby="search" placeholder="Zoek">
                            </div>
                        </div>



                        <div class="field">
                            <div class="control">
                                <select class="button filter" name="category">
                                    <option class="dropdown-item custom-item" value="0">Fiets type</option>
                                @foreach($categories as $category)
                                        <option class="dropdown-item custom-item" value="{{$category->id}}">{{ $category->Naam }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    <div class="field">
                        <div class="control">
                            <select class="button filter" name="brand">
                                    <option class="dropdown-item custom-item" value="none">merk</option>
                                @foreach($brands as $brand)
                                    <option class="dropdown-item custom-item" value="{{$brand}}">{{ $brand}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <select class="button filter" name="gears">

                                    <option class="dropdown-item custom-item" value="0">Aantal versnellingen</option>
                                    <option class="dropdown-item custom-item" value="1">1 versnelling</option>
                                    <option class="dropdown-item custom-item" value="2">2 versnellingen</option>
                                    <option class="dropdown-item custom-item" value="3">3 versnellingen</option>
                                    <option class="dropdown-item custom-item" value="4">4 versnellingen</option>
                                    <option class="dropdown-item custom-item" value="5">5 versnellingen</option>
                                    <option class="dropdown-item custom-item" value="6">meer dan 6</option>

                            </select>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <select class="button filter" name="pricefilter">
                                <option class="dropdown-item custom-item" value="0">Prijs</option>

                                <option class="dropdown-item custom-item" value="1">Laag naar hoog</option>
                                <option class="dropdown-item custom-item" value="2">Hoog naar laag</option>

                            </select>
                        </div>
                    </div>


                    {{--<div class="field">--}}
                        {{--<div class="control">--}}
                            {{--<select class="button filter" name="category">--}}
                                {{--@foreach($categories as $category)--}}
                                    {{--<option class="dropdown-item custom-item" value="{{$category->id}}">{{ $category->Naam }}</option>--}}
                                {{--@endforeach--}}
                            {{--</select>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    </div>
                    <div class="col-lg-6 ">
                        <div class="field">
                            <div class="control">
                                <button type="submit" class="button is-link">Zoek <i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </form>

                </div>
                {{--<div class="col-lg-2 p-2">--}}
                    {{--<form class="box" method="POST" action="/products">--}}
                    {{--<div class="dropdown">--}}
                        {{--<button class="button filter" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                            {{--<i class="fa fa-arrow-down pr-2"></i>--}}
                            {{--Type--}}
                        {{--</button>--}}


                        {{--<div class="dropdown-menu dropdown-width " aria-labelledby="dropdownMenuButton">--}}
                            {{--<select class="input" name="ontvanger">--}}
                            {{--@foreach($categories as $category)--}}
                                {{--<option value="{{$category->id}}">--}}
                            {{--<a class="dropdown-item custom-item"  type="submit">  <i class="fa fa-angle-right pr-2"></i>{{$category->Naam}}</a>--}}
                                {{--</option>--}}

                                {{--@endforeach--}}
                            {{--</select>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--</form>--}}

                {{--</div>--}}


            </div>




        <div class="row justify-content products">
        @foreach($bikes as $bike)
            @if($bike->forSale == 1)
                <div class="pr-3 col-md-4 mt-3 mb-3" >
                    <div class="card product product-height">
                        <div class="product-image"></div>
                        <div class="card-body position-relative">
                            <h5 class="card-title">{{$bike->naam}}</h5>
                            <span>
                                @if ($bike->aanbiedingsprijs == 0.00)
                                   <h1> &euro;{{$bike->prijs}}</h1>
                                @else
                                    <span style="text-decoration: line-through red"><h4>&euro;{{$bike->prijs}}</h4></span>
                                    <h1>&euro;{{$bike->aanbiedingsprijs}}</h1>
                                @endif
                            </span>
                            <p class="card-text">{{$bike->omschrijving}}</p>
                            <ul>
                                <li>Versnellingen: {{$bike->versnellingen}}</li>
                                @foreach($categories as $type)
                                    @if($bike->typeId == $type->id )
                                        <li>Type: {{$type->Naam}}</li>
                                    @endif
                                @endforeach
                            </ul>
                            <div class="position-absolute bottomRight ">
                                <a href="products/{{$bike->id}}" class="button">Bekijk</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
        </div>
    </div>
    </div>

@endsection
