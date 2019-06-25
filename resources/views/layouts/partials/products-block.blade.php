<div class="products__block">
    <div class="container">
        <h2 class="products__block--heading">Recent toegevoegde producten</h2>

        <div class="products__block--products">
            <div class="row">
                @foreach($bikes->where("forSale", "1")->take(3) as $bike)
                <div class="col-md-4">
                    <a href="products/{{$bike->id}}">
                        <div class="single">
                            @foreach($bikepictures as $img)
                                @if($img->FietsID == $bike->id)
                                 <div class="products__block--products-photo" style="background-image: url('{{url("images/$img->Filename")}}');"></div>
                                    @break
                                @endif
                            @endforeach
                            <div class="products__block--products--info">
                                <h3 class="products__block--products--info-name">{{$bike->naam}}</h3>
                                <span class="products__block--products--info-price">
                                @if ($bike->aanbiedingsprijs == 0.00)
                                        <h1> &euro;{{$bike->prijs}}</h1>
                                    @else
                                        <span style="text-decoration: line-through red"><h4>&euro;{{$bike->prijs}}</h4></span>
                                        <h1>&euro;{{$bike->aanbiedingsprijs}}</h1>
                                    @endif
                            </span>
                            </div>
                        </div>
                    </a>
                </div>
                    @endforeach
            </div>
        </div>
    </div>
</div>
