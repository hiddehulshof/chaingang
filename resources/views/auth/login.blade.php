@extends('layouts.loginlayout', ['page' => 'login'])
@section('headercontent')

        <div class="container col-md-4">
            <div class=" border-primary rounded-lg p-5 background">
            <form method="post" action="login">
                @csrf
                <h2 class="text-center article__heading">Log in</h2>
                <div class="form-group">
                    <input type="text" name="email" class="form-control" placeholder="Email" required="required">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required="required">
                </div>

                <div class="clearfix">
                    <label class="pull-left checkbox-inline"><input type="checkbox" name="remember"> <b>Remember me</b></label>
                </div>
                <div class="form-group">
                    <a><button type="submit" class="button btn-block">Log in</button></a>
                </div>
                <p class="text-center"><a href="/register"><b>Create an Account</b></a></p>

            </form>

        </div>
    </div>

@endsection
