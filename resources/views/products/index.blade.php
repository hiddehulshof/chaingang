@extends('layouts.contentlayout')

@section('headercontent')
    <h1>Tweedehands fietsen</h1>
@endsection
@section('content')
    <div class="article products-page">
        <div class="container">
            <h1 class="article__heading">Producten</h1>

            <div class="row justify-content-between">
                <div class="col-lg-6 col-md-3">

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

                <div class="col-lg-2 col-md-3 p-2">
                    <div class="dropdown">
                        @php
                            $selected = 0;
                        @endphp
                        @foreach($categories as $category)
                            @if($selected == 0)
                        <button class="button filter" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-arrow-down pr-2"></i>
                            {{$category->Naam}}
                        </button>
                            @elseif($selected == 1)
                        <div class="dropdown-menu dropdown-width " aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item custom-item" href="#">  <i class="fa fa-angle-right pr-2"></i>{{$category->Naam}}</a>
                            @else
                            <a class="dropdown-item custom-item" href="#">  <i class="fa fa-angle-right  pr-2"></i>{{$category->Naam}}</a>
                            @endif

                                @php
                                    $selected++;
                                @endphp
                                @endforeach
                        </div>
                    </div>


                </div>
                <div class="col-lg-2 col-md-3 p-2">
                    <div class="button   filter">
                        <i class="fa fa-arrow-down pr-2"></i>

                        Type
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 p-2">
                    <div class="button  filter">
                        <i class="fa fa-arrow-down pr-2"></i>

                        prijs
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
                            <p class="card-text">{{$bike->omschrijving}}</p>
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
