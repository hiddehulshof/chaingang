@extends('layouts.contentlayout')

@section('content')

    <div class="admin-article ">
        <div class="container">
            <h1 class="pb-5">Beheer</h1>
            <div class="row">
            <div class="col-lg-6">

                    <div class="list-group">

                        <a href="admin/products/overview" class="list-group-item">

                            <h3>Producten</h3></i>
                            <p >Toevoegen, verwijderen en aanpassen van producten

                            </p>

                        </a>
                        <a href="admin/users/overview" class="list-group-item ">
                            <h3>Gebruikers </h3>
                            <p >Beheer van gebruikers</p>
                        </a>
                        <a href="admin/reviews/overview" class="list-group-item">
                            <h3>Review</h3>
                            <p> Beheer van ingekomen reviews</p>
                        </a>
                        <a href="admin/orders/overview" class="list-group-item">
                            <h3>Bestellingen </h3>
                            <p> Ingekomen bestellingen</p>
                        </a>
                    </div>
                </div>

            <div class="col-lg-6 card-columns cards-margin">
                    <div class="card card-shadow">
                        <div class="card-body"><h1 class="text-center pt-2"><i class="fas fa-bicycle"></i></h1>
                            <h3 class="text-center">
                                <span class="badge badge-info bg-dark text-white">{{$bikes->count()}}</span><br>
                            </h3>
                            <p class="text-center small"><b> Fietsen</p>
                        </div>

                    </div>
                <div class="card card-shadow">
                    <div class="card-body"><h1 class="text-center pt-2"><i class="fas fa-users"></i></h1>
                        <h3 class="text-center">
                            <span class="badge badge-info bg-dark text-white">{{ $users->count() }}</span><br>
                        </h3>
                        <p class="text-center small"><b> Gebruikers</b></p>
                    </div>

                </div>
                <div class="card card-shadow">
                    <div class="card-body"><h1 class="text-center pt-2"><i class="fas fa-comment-alt"></i></h1>
                        <h3 class="text-center">
                            <span class="badge badge-info bg-dark text-white">{{$reviews->count()}}</span><br>
                        </h3>
                        <p class="text-center small"><b> Reviews</b></p>

                    </div>

                </div>
                <?php $total = 0?>
                @foreach($bikes as $bike)
                    @if($bike->forSale == 0)
                        @if($bike->aanbiedingsprijs > 0)
                             @php($total+=$bike->aanbiedingsprijs )

                        @else
                           @php($total+=$bike->prijs)

                        @endif
                    @endif
                @endforeach
                <div class="card card-shadow">
                    <div class="card-body"><h1 class="text-center pt-2"><i class="fas fa-cart-arrow-down"></i></h1>
                        <h3 class="text-center">
                            <span class="badge badge-info bg-dark text-white">{{$orders->count()}}</span><br>
                        </h3>
                        <p class="text-center small"><b>Bestellingen</b></p>
                    </div>

                </div>
                <div class="card card-shadow">
                    <div class="card-body"><h1 class="text-center pt-2"><i class="fas fa-euro-sign"></i></h1>
                        <h3 class="text-center">
                            <span class="badge badge-info bg-dark text-white">&euro;{{$total}}</span><br>
                        </h3>
                        <p class="text-center small"><b>Omzet</b></p>
                    </div>

                </div>

                <div class="card card-shadow">
                    <div class="card-body"><h1 class="text-center pt-2"><i class="fas fa-cart-arrow-down"></i></h1>
                        <h3 class="text-center">
                            <span class="badge badge-info bg-dark text-white">{{$bikes->where("forSale", 0)->count()}}</span><br>
                        </h3>
                        <p class="text-center small"><b>Verkocht</b></p>
                    </div>

                </div>
            </div>

        </div>
    </div>
    </div>

@endsection