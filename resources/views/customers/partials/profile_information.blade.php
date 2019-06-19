<div class="contact">
    <div class="container">
        <h2>profiel</h2>
        <hr>


        <form method="post" class="w-100">
            @csrf
            <div class="register-width">
                <div class="form-group col-12 ">
                    <div class="row">
                        <div class="col-md-4"><label><b>Voornaam *</b></label></div>
                        <div class="col-md-8"><input type="text" class="form-control" name="firstname" required="required" value="{{$user->Voornaam}}"></div>
                    </div>
                </div>
                <div class="form-group col-12">
                    <div class="row">
                        <div class="col-md-4"><label><b>Tussenvoegsel</b></label></div>
                        <div class="col-md-8"><input type="text" class="form-control" name="between"  value="{{$user->Tussenvoegsel}}"></div>
                    </div>
                </div>
                <div class="form-group col-12">
                    <div class="row">
                        <div class="col-md-4"><label><b>Achternaam *</b></label></div>
                        <div class="col-md-8"><input type="text" class="form-control" name="lastname" required="required" value="{{$user->Achternaam}}"></div>
                    </div>
                </div>
                <div class="form-group col-12">
                    <div class="row">
                        <div class="col-md-4"><label><b>Email *</b></label></div>
                        <div class="col-md-8"><input type="email" class="form-control" name="email" required="required" value="{{$user->email}}"></div>
                    </div>
                </div>
                <div class="form-group col-12">
                    <div class="row">
                        <div class="col-md-4"><label><b>Wachtoord *</b></label></div>
                        <div class="col-md-8"><input type="password" class="form-control" name="password" required="required" disabled value="***"></div>
                    </div>
                </div>
                <div class="form-group col-12">
                    <div class="row">
                        <div class="col-md-4"><label><b>Telefoonnummer *</b></label></div>
                        <div class="col-md-8"><input type="tel" class="form-control" name="telephone" required="required"  value="{{$user->TelefoonNR}}"></div>
                    </div>
                </div>
                <div class="form-group col-12">
                    <div class="row">
                        <div class="col-md-4"><label><b>Straat *</b></label></div>
                        <div class="col-md-8"><input type="text" class="form-control" name="street" required="required"  value="{{$user->Straat}}"></div>
                    </div>
                </div>
                <div class="form-group col-12">
                    <div class="row">
                        <div class="col-md-4"><label><b>Huisnummer *</b></label></div>
                        <div class="col-md-8"><input type="number" class="form-control" name="housenumber" required="required" value="{{$user->Huisnr}}"></div>
                    </div>
                </div>
                <div class="form-group col-12">
                    <div class="row">
                        <div class="col-md-4"><label><b>Postcode *</b></label></div>
                        <div class="col-md-8"><input type="text" class="form-control" name="zipcode" required="required"  value="{{$user->Postcode}}"></div>
                    </div>
                </div>
                <div class="form-group col-12">
                    <div class="row">
                        <div class="col-md-4"><label><b>Plaats *</b></label></div>
                        <div class="col-md-8"><input type="text" class="form-control" name="city" required="required"  value="{{$user->Plaats}}"></div>
                    </div>
                </div>
                <hr>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Opslaan</button>
                </div>
            </div>
        </form>
    </div>
</div>