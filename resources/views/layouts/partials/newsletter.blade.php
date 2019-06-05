<div class="newsletter">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <h2 class="newsletter__heading">Schrijf je in voor onze nieuwsbrief</h2>
                <form method="post" action="/newsletter">
                    @csrf
                    <input class="textbox newsletter__input" type="email" name="email" placeholder="Email">
                    <button type="submit" class="button newsletter__input btn btn-primary">Inschrijven</button>
                </form>
            </div>
        </div>
    </div>
</div>
