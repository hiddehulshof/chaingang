@extends('layouts.mainlayout')
@section('content')
    <div class="album text-muted">
        <div class="container">
            <h1>Voeg nieuw product toe</h1>

                <form method="POST" action="/products">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="label">Product naam</label>
                        <div class="control">
                            <input type="text"  class="form-control " name="name" placeholder="Project title" value="{{old('title')}}" required>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label"></label>
                        <div class="control">
                            <textarea name="description" class="form-control " placeholder="Project description"  required >{{old('description')}}</textarea>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Voeg toe aan webshop</button>
                    </div>

                </form>

        </div>

    </div>

@endsection
<b></b>