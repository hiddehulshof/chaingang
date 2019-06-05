@extends('layouts.contentlayout')

@section('headercontent')
    <h1>Tweedehands fietsen</h1>
@endsection
@section('content')
    <div class="article products-page">
        <div class="container">
            <h1 class="article__heading">Producten</h1>

            <div class="row justify-content-between">
                <div class="col-lg-4 ">

                    <ul class="brands">
                        <li>
                            <a>Gazelle</a>
                        </li>
                        <li>
                            <b><a> Batavius</a></b>
                        </li>
                        <li>
                            <a> Stella</a>
                        </li>
                        <li>
                            <a>Sprint</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-2 p-2">
                    <div class="dropdown">
                        <button class="button filter" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-arrow-down pr-2"></i>
                            Type
                        </button>


                        <div class="dropdown-menu dropdown-width " aria-labelledby="dropdownMenuButton">
                            @foreach($categories as $category)
                            <a class="dropdown-item custom-item" href="#">  <i class="fa fa-angle-right pr-2"></i>{{$category->Naam}}</a>


                                @endforeach
                        </div>
                    </div>


                </div>
                <div class="col-lg-3  p-2">
                    <div class="dropdown">
                        <button class="button filter" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-arrow-down pr-2"></i>
                            Versnellingen
                        </button>
                        <div class="dropdown-menu dropdown-width " aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item custom-item" href="#">  <i class="fa fa-angle-right pr-2"></i>1</a>

                                <a class="dropdown-item custom-item" href="#">  <i class="fa fa-angle-right  pr-2"></i>2</a>
                            <a class="dropdown-item custom-item" href="#">  <i class="fa fa-angle-right  pr-2"></i>3</a>
                            <a class="dropdown-item custom-item" href="#">  <i class="fa fa-angle-right  pr-2"></i>4</a>
                            <a class="dropdown-item custom-item" href="#">  <i class="fa fa-angle-right  pr-2"></i>5</a>
                            <a class="dropdown-item custom-item" href="#">  <i class="fa fa-angle-right  pr-2"></i>6</a>
                            <a class="dropdown-item custom-item" href="#">  <i class="fa fa-angle-right  pr-2"></i>7+</a>


                        </div>
                    </div>
                </div>
                <div class="col-lg-2  p-2">
                    <div class="dropdown">
                        <button class="button filter" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-arrow-down pr-2"></i>
                            Prijs
                        </button>
                        <div class="dropdown-menu dropdown-width " aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item custom-item" href="#">  <i class="fa fa-angle-right pr-2"></i>Hoog</a>

                            <a class="dropdown-item custom-item" href="#">  <i class="fa fa-angle-right  pr-2"></i>Laag</a>


                        </div>
                    </div>
                </div>


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
