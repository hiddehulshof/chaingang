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
                    <th><h3 class="p-3">Ordernummer</h3></th>
                    <th><h3 class="p-3">Bestellingsgegevens</h3></th>
                    <th></th>
                    <th></th>

                    <th></th>

                </tr>
                </thead>



                <tr class="font-weight-bolder">
                    <td class="p-3"> Voornaam</td>

                    <td class="p-3"> {{$customer->Voornaam}}</td>
                </tr>
                <tr class="font-weight-bolder">
                    <td class="p-3"> Achternaam</td>

                    <td class="p-3"> {{$customer->Achternaam}}</td>
                </tr>
                <tr class="font-weight-bolder">
                    <td class="p-3"> Email</td>

                    <td class="p-3"> {{$customer->Email}}</td>
                </tr>
                    <tr class="font-weight-bolder">
                        <td class="p-3"> Plaats</td>

                        <td class="p-3"> {{$order->plaats}}</td>
                    </tr>
                <tr class="font-weight-bolder">
                    <td class="p-3"> Postcode</td>
                    <td class="p-3"> {{$order->postcode}}</td>
                </tr>
                <tr class="font-weight-bolder">
                    <td class="p-3"> Straat</td>
                    <td class="p-3"> {{$order->straat}}</td>
                </tr>
                <tr class="font-weight-bolder">
                    <td class="p-3"> Huisnummer</td>
                    <td class="p-3"> {{$order->huisnr}}</td>
                </tr>


                <thead>
                <tr>
                    <th><h5 class="p-3">id</h5></th>
                    <th><h5 class="p-3">Products</h5></th>
                    <th></th>
                    <th></th>

                    <th></th>

                </tr>
                </thead>
                <?php $total = 0 ?>
                        @foreach($orderitems as $orderitem)
                            <tr class="font-weight-bolder">
                        <td class="p-3"> {{$orderitem->id}}</td>
                            @foreach($bikes as $bike)
                                @if($bike->id == $orderitem->ProductID)
                                    <td class="p-3">  {{$bike->naam}}</td>
                                        <td class="p-3">  &euro;{{$bike->prijs}}</td>
                                        <?php $total += $bike->prijs ?>
                                @endif
                            @endforeach
                            </tr>
                            @endforeach
                <tr class="font-weight-bolder">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><b>Totaal: &euro;</b>{{$total}}</td>
                </tr>


            </table>
        </div>
    </div>

@endsection
