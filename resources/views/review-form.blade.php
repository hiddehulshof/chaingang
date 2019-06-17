@extends('layouts.contentlayout')
@section('title', 'Reviews')

@section('headercontent')
    <h1>Reviews</h1>
@endsection

@section('content')
    @include('layouts.partials.review-form')
    @include('layouts.partials.newsletter')
@endsection

