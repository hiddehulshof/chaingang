<div class="article">
    <div class="container ">
        <form  method="POST" action="/register">
            @csrf
            <div class="register-width">
                <div class="form-group col-12 ">
                    <div class="row">
                        <div class="col-md-4"><label><b>Voornaam *</b></label></div>
                        <div class="col-md-8"><input type="text" class="form-control" name="firstname" required="required"></div>
                    </div>
                </div>
                <div class="form-group col-12">
                    <div class="row">
                        <div class="col-md-4"><label><b>Tussenvoegsel</b></label></div>
                        <div class="col-md-8"><input type="text" class="form-control" name="between"></div>
                    </div>
                </div>
                <div class="form-group col-12">
                    <div class="row">
                        <div class="col-md-4"><label><b>Achternaam *</b></label></div>
                        <div class="col-md-8"><input type="text" class="form-control" name="lastname" required="required"></div>
                    </div>
                </div>
                <div class="form-group col-12">
                    <div class="row">
                        <div class="col-md-4"><label><b>Email *</b></label></div>
                        <div class="col-md-8"><input type="email" class="form-control" name="email" required="required"></div>
                    </div>
                </div>
                <div class="form-group col-12">
                    <div class="row">
                        <div class="col-md-4"><label><b>Wachtwoord *</b></label></div>
                        <div class="col-md-8"><input type="password" class="form-control" name="password" required="required"></div>
                    </div>
                </div>
                <div class="form-group col-12">
                    <div class="row">
                        <div class="col-md-4"><label><b>Telefoonnummer *</b></label></div>
                        <div class="col-md-8"><input type="tel" class="form-control" name="telephone" required="required"></div>
                    </div>
                </div>
                <div class="form-group col-12">
                    <div class="row">
                        <div class="col-md-4"><label><b>Straat *</b></label></div>
                        <div class="col-md-8"><input type="text" class="form-control" name="street" required="required"></div>
                    </div>
                </div>
                <div class="form-group col-12">
                    <div class="row">
                        <div class="col-md-4"><label><b>Huisnummer *</b></label></div>
                        <div class="col-md-8"><input type="number" class="form-control" name="housenumber" required="required"></div>
                    </div>
                </div>
                <div class="form-group col-12">
                    <div class="row">
                        <div class="col-md-4"><label><b>Postcode *</b></label></div>
                        <div class="col-md-8"><input type="text" class="form-control" name="zipcode" required="required"></div>
                    </div>
                </div>
                <div class="form-group col-12">
                    <div class="row">
                        <div class="col-md-4"><label><b>Plaats *</b></label></div>
                        <div class="col-md-8"><input type="text" class="form-control" name="city" required="required"></div>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <input class="contact__checkbox" type="checkbox" id="checkbox" required="required">
                    <label class="form-check-label " for="checkbox">Ik ga akkoord met het verzenden van bovenstaande
                        gegevens *</label>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Regsitreer</button>
                </div>
            </div>
        </form>
    </div>
</div>