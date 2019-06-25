@extends('layouts.contentlayout')

@section('headercontent')
    <h1>Tweedehands fietsen</h1>
@endsection
@section('content')
    <div class="article products-page">
        <div class="container">
            <h1 class="article__heading mb-5">Producten</h1>

            <div class="p-2 w-100">
                <form class="box row" method="POST" action="/products">
                    @csrf

                    <div class="row w-100 mb-4">
                        <div class="col d-flex">
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

                                        <?php for ($i=1; $i <= 5; $i++): ?>
                                            <option class="dropdown-item custom-item" value="<?= $i; ?>"><?= $i; ?> versnellingen</option>
                                        <?php endfor; ?>

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
                        </div>
                    </div>
                    <div class="row w-100 mb-4">
                        <div class="col d-flex">
                            <div class="field w-25">
                                <div class="control">
                                    <input type="text" class="form-control" name="search" aria-describedby="search" placeholder="Zoek">
                                </div>
                            </div>

                            <div class="field w-25">
                                <div class="control">
                                    <button type="submit" class="button is-link w-100 m-0">Toepassen <i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content products">

                @php($i = 0)
                @foreach($bikes as $bike)

                    @if($bike->forSale == 1)
                        <div class="pr-3 col-md-4 mt-3 mb-3">
                            <div class="card product product-height">
                                @foreach($images as $img)
                                    @if($img->FietsID == $bike->id)
                                         <div class="product-image" style="background-image: url('{{url("images/" . $img->Filename)}}');"></div>
                                        @break
                                    @endif
                                @endforeach
                                <div class="card-body position-relative products--card">
                                    <h2 class="card-title products--title">{{$bike->naam}}</h2>
                                    <div class="products--price">
                                        <span>
                                            @if ($bike->aanbiedingsprijs == 0.00)
                                                <h3> &euro;{{$bike->prijs}}</h3>
                                            @else
                                                <span style="text-decoration: line-through red">
                                                    <h5>&euro;{{$bike->prijs}}</h5>
                                                </span>
                                                <h3>&euro;{{$bike->aanbiedingsprijs}}</h3>
                                            @endif
                                        </span>
                                    </div>
                                    <ul class="products--list">
                                        <li><b>{{$bike->merk}}</b></li>
                                        <li>Versnellingen: {{$bike->versnellingen}}</li>
                                        @foreach($categories as $type)
                                            @if($bike->typeId == $type->id )
                                                <li>Type: {{$type->Naam}}</li>
                                            @endif
                                        @endforeach
                                    </ul>
                                    <div class="position-absolute products--buttonwrap">
                                        <a href="products/{{$bike->id}}" class="button products--button">Bekijk</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>

        {{ $bikes->links() }}
    </div>

    </div>
@endsection
