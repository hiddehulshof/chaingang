@extends('layouts.contentlayout')
@section('title', 'Cart')
@section('headercontent')
    <h1>WinkelWagen</h1>
@endsection
@section('content')
<div class="article">
    <div class="container">
    <table id="cart" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th style="width:50%">Product</th>
            <th style="width:25%">Prijs</th>

            <th style="width:25%"></th>
        </tr>
        </thead>
        <tbody>

        <?php $total = 0 ?>

        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
                @if($details['aanbiedingsprijs'] > 0)
                    <?php $total += $details['aanbiedingsprijs'] ?>

           @else
                <?php $total += $details['price'];
                ?>
                @endif
                <tr>
                    <td data-th="Product">
                        <div class="row">
                            @foreach($bikepictures as $img)
                                @if($img->FietsID == $details['quantity'] )
                            <div class="col-sm-3 hidden-xs"><img src="{{url("images/$img->Filename")}}" width="100" height="100" class="img-responsive"/></div>
                                    @break
                                @endif


                            @endforeach
                            <div class="col-sm-9">
                                <h4 class="nomargin"><a href="/products/{{$details['quantity']}}">{{ $details['name'] }}</a></h4>
                            </div>
                        </div>
                    </td>
                    @if($details['aanbiedingsprijs'] > 0)
                        <td data-th="Price">     <span style="text-decoration: line-through red">&euro;{{ $details['price'] }}</span> &euro;{{ $details['aanbiedingsprijs'] }}</td>
                        @else
                    <td data-th="Price">&euro;{{ $details['price'] }}</td>
                    @endif

                    <td class="actions" data-th="">
                        <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}">Verwijder uit winkelwagen</button>
                    </td>
                </tr>
            @endforeach
        @endif

        </tbody>
        <tfoot>
        <tr class="visible-xs">
            <td class="text-center"><strong>Totaal &euro;{{ $total }}</strong></td>
        </tr>
        <tr>
            <td><a href="{{ url('/') }}" class="button"><i class="fa fa-angle-left"></i> verder winkelen</a></td>
            <td colspan="2" class="hidden-xs"></td>
            <td class="hidden-xs text-center"><strong>Totaal &euro;{{ $total }}</strong></td>
            <td><a href="cart/betaal" class="button"> Betaal</a></td>

        </tr>
        </tfoot>
    </table>
    </div>
</div>

@endsection
