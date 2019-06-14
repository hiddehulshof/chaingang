@extends('layouts.contentlayout')
@section('content')
    <div class="admin-article ">
        <div class="container">

                <h1 class="pb-5">Beheer</h1>

            <div class="list-group">
                <a href="admin/products/overview" class="list-group-item">
                    <h3>Producten</h3>
                    <p >Toevoegen, verwijderen en aanpassen van producten</p>
                </a>
                <a href="admin/users/overview" class="list-group-item">
                    <h3>Gebruikers</h3>
                    <p >Beheer van gebruikers</p>
                </a>
                <a href="admin/reviews/overview" class="list-group-item">
                    <h3>Reviews</h3>
                    <p> Beheer van ingekomen reviews</p>
                </a>
                <a href="admin/orders/overview" class="list-group-item">
                    <h3>Orders</h3>
                    <p> Ingekomen orders</p>
                </a>

            </div>
        </div>
    </div>

@endsection