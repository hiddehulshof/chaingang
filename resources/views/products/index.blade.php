@extends('layouts.mainlayout')
@section('content')
    <div class="album text-muted">
        <div class="container">
            <h1>Producten</h1>
            <div class="row">
                @foreach($products as $product)

                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text"> {{ $product->description }}</p>
                        <a href="#" class="btn btn-primary">Bekijk product</a>
                    </div>
                </div>
                    @endforeach
            </div>
        </div>

    </div>

@endsection
<b></b>