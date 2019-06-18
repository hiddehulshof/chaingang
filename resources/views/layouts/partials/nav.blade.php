<div class="navigation">
    <div class="navigation__wrapper container">

        <div>
            <a class="navigation__wrapper-logo" href="/">Chaingang</a>
        </div>
        <div class="navigation__wrapper--menu">
            <a class="navigation__wrapper-link" href="/">Home</a>
{{--"/" toegevoegd aan iedere href hieronder (NIET HIERBOVEN) om pruducts/products te voorkomen.
Werkt mischien niet op de live server.--}}
            <a class="navigation__wrapper-link" href="/products">Fietsen</a>
            <a class="navigation__wrapper-link" href="/over-ons">Over ons</a>
            <a class="navigation__wrapper-link" href="/contact">Contact</a>
            @auth
                <a class="navigation__wrapper-link" href="/logout">Logout</a>
            @endauth
            @guest
                <a class="navigation__wrapper-link" href="/login">Login</a>
            @endguest
            <a class="navigation__wrapper-link" href="/cart"><i class="fas fa-shopping-cart"></i></a>
            @auth
                <a class="navigation__wrapper-link" href="/profile"><i class="fas fa-user-alt"></i></a>
            @endauth
        </div>
        <div class="navigation__wrapper-hamburger">
            <span class="navigation__wrapper-hamburger-line"></span>
            <span class="navigation__wrapper-hamburger-line"></span>
            <span class="navigation__wrapper-hamburger-line"></span>
        </div>
    </div>
    <div class="navigation__dropdown">
        <div class="navigation__dropdown--wrap">
            <a class="navigation__dropdown--wrap-link" href="/">Home</a>
            <a class="navigation__dropdown--wrap-link" href="products">Fietsen</a>
            <a class="navigation__dropdown--wrap-link" href="over-ons">Over ons</a>
            <a class="navigation__dropdown--wrap-link" href="over-contact">Contact</a>
            <a class="navigation__dropdown--wrap-link" href="login">Login</a>
        </div>
    </div>
</div>
