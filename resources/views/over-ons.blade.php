@extends('layouts.contentlayout')
@section('headercontent')
    <h1>Over ons</h1>
    <p>Leer ons beter kennen!</p>
@endsection

@section('content')

    @include('layouts.partials.over-ons-content')
    @include('layouts.partials.newsletter')

@endsection