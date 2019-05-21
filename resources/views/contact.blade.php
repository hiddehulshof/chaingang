@extends('layouts.contentlayout')
@section('headercontent')
    <h1>Contact</h1>
    <p>neem contact met ons op</p>
@endsection

@section('content')

    @include('layouts.partials.contactform')
    @include('layouts.partials.newsletter')

@endsection
