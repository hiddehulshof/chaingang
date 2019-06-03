@extends('layouts.contentlayout')

@section('headercontent')
    <h1>Tweedehands fietsen</h1>
@endsection
@section('content')
    <div class="row justify-content-between products">
    @foreach($bikes as $bike)
        @if($bike->forSale == 1)
            <div class="pr-3 col-md-4 mt-3 mb-3" >
                <div class="card product ">
                    <div class="product-image"></div>
                    <div class="card-body">
                        <h5 class="card-title">{{$bike->naam}}</h5>
                        <p class="card-text">{{$bike->omschrijving}}</p>
                        <a href="#" class="button">Bekijk</a>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
    </div>
@endsection
<b></b>