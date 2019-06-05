<div class="products__block">
    <div class="container">
        <h2 class="products__block--heading">Recent toegevoegde producten</h2>

        <div class="products__block--products">
            <div class="row">
                @foreach($bikes->take(3) as $bike)
                    @if($bike->forSale == 1)
                <div class="col-md-4">
                    <div class="single">
                        <div class="products__block--products-photo"></div>
                        <div class="products__block--products--info">
                            <h3 class="products__block--products--info-name">{{$bike->naam}}</h3>
                            <span class="products__block--products--info-price">{{$bike->prijs}}</span>
                        </div>
                    </div>
                </div>
                    @endif
                    @endforeach

            </div>
        </div>
    </div>
</div>
