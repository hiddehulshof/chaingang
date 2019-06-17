@extends('layouts.contentlayout')
@section('title', 'Reviews')

@section('headercontent')
    <h1>Reviews</h1>
@endsection

@section('content')
    @include('layouts.partials.review-list')
    @include('layouts.partials.newsletter')
@endsection
