@extends('layouts.contentlayout')

@section('headercontent')
    <h1>Creeër een account</h1>
@endsection
@section('content')
    <div class="article">
        <div class="container">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="register-width">
                    <div class="form-group row">
                        <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('Voornaam') }}</label>

                        <div class="col-md-6">
                            <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror"
                                   name="firstname"
                                   value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

                            @error('firstname')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="between" class="col-md-4 col-form-label text-md-right">{{ __('Tussenvoegsel') }}</label>

                        <div class="col-md-6">
                            <input id="between" type="text" class="form-control "
                                   name="between"
                                   value="{{ old('Tussenvoegsel') }}"  autocomplete="between" autofocus>


                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Achternaam') }}</label>

                        <div class="col-md-6">
                            <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror"
                                   name="lastname"
                                   value="{{ old('Achternaam') }}" required autocomplete="lastname" autofocus>

                            @error('lastname')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email"
                               class="col-md-4 col-form-label text-md-right">{{ __('Email-adres') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                   name="email" value="{{ old('Email-adres') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password"
                                   class="form-control @error('password') is-invalid @enderror"
                                   name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm"
                               class="col-md-4 col-form-label text-md-right">{{ __('Bevestig wachtwoord') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control"
                                   name="password_confirmation"
                                   required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="telephone"
                               class="col-md-4 col-form-label text-md-right">{{ __('Telefoonnummer') }}</label>

                        <div class="col-md-6">
                            <input id="telephone" type="tel" class="form-control"
                                   name="telephone" value="{{ old('telefoonnummer') }}" required autocomplete="email">


                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="street"
                               class="col-md-4 col-form-label text-md-right">{{ __('Straat') }}</label>

                        <div class="col-md-6">
                            <input id="street" type="text" class="form-control"
                                   name="street" value="{{ old('Straat') }}" required >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="housenumber"
                               class="col-md-4 col-form-label text-md-right">{{ __('Huisnummer') }}</label>

                        <div class="col-md-6">
                            <input id="housenumber" type="text" class="form-control"
                                   name="housenumber" value="{{ old('Huisnummer') }}" required >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="zipcode"
                               class="col-md-4 col-form-label text-md-right">{{ __('Postcode') }}</label>

                        <div class="col-md-6">
                            <input id="zipcode" type="text" class="form-control"
                                   name="zipcode" value="{{ old('Postcode') }}" required >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="city"
                               class="col-md-4 col-form-label text-md-right">{{ __('Plaats') }}</label>

                        <div class="col-md-6">
                            <input id="city" type="text" class="form-control"
                                   name="city" value="{{ old('Plaats') }}" required >
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Registreer') }}
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
