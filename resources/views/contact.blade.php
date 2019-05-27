@extends('layouts.contentlayout')
@section('headercontent')
    <h1>Contact</h1>
    <p>neem contact met ons op</p>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                @include('layouts.partials.contactinfo')
            </div>
            <div class="col-md-8">
                @include('layouts.partials.contactform')
            </div>

        </div>
    </div>
    @include('layouts.partials.maps')
    @include('layouts.partials.newsletter')

@endsection
