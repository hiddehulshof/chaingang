@extends('layouts.contentlayout')
@section('headercontent')
    <h1>Welkom "{{"$user->Voornaam $user->Tussenvoegsel $user->Achternaam"}}"</h1>
@endsection
@section('content')

    @include('customers.partials.profile_information')

@endsection