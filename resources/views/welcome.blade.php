@extends('layouts.mainlayout', ['page' => 'other'])
@section('headercontent')
    <h1>Tweedehands fietsen</h1>
@endsection

@section('content')

    @include('layouts.partials.article')
    @include('layouts.partials.products-block', ['bikes' => $bikes])
    @include('layouts.partials.reviews')
    @include('layouts.partials.newsletter')

@endsection

