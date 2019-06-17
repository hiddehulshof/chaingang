@extends('layouts.contentlayout')
@section('headercontent')
    <h1>Welkom "testpersoon"</h1>
@endsection
@section('content')

    @include('customers.partials.profile_information')

@endsection