<div class="contact">
    <div class="container">
        <h2>profiel</h2>
        <hr>
        <label  class="contact__label" for="InputEmail">Username:</label>
        <p>Hier komt de usernaam te staan</p>

        <form method="post" class="w-100">
            <div class="row">
                <div class="col-12 form-group">
                    <label  class="contact__label" for="InputEmail">E-mailadres *</label>
                    <input type="email" class="form-control" name="e-mail" id="InputEmail" aria-describedby="email"
                           placeholder="Emailadres" required>
                </div>

                <div class="col-12 form-group">
                    <label class="contact__label" for="InputFirstname">Voornaam</label>
                    <input type="text" class="form-control" name="voornaam" id="InputFirstname"
                           aria-describedby="Voornaam" placeholder="Voornaam">
                </div>
                <div class="col-12 form-group">
                    <label class="contact__label" for="InputLastname">Achternaam</label>
                    <input type="text" class="form-control" name="phonenumber" id="InputLastname"
                           aria-describedby="Achternaam" placeholder="Achternaam">
                </div>
                <div class="col-12 form-group">
                    <label class="contact__label" for="InputTelephone">Telefoonnummer</label>
                    <input type="tel" class="form-control" name="phonenumber" id="InputTelephone"
                           aria-describedby="Telefoonnummer" placeholder="Telefoonnummer">
                </div>
                <div class="col-12 form-group">
                    <label class="contact__label" for="InputStreetname">Straatnaam</label>
                    <input type="text" class="form-control" name="phonenumber" id="InputLastname"
                           aria-describedby="Achternaam" placeholder="Straatnaam">
                </div>
                <div class="col-6 form-group">
                    <label class="contact__label" for="InputPostcode">Postcode</label>
                    <input type="text" class="form-control" name="phonenumber" id="InputLastname"
                           aria-describedby="Achternaam" placeholder="Postcode">
                </div>
               <div class="col-6 form-group">
                    <label class="contact__label" for="InputHousenumber">Huisnummer</label>
                    <input type="text" class="form-control" name="housenumber" id="InputLastname"
                           aria-describedby="Achternaam" placeholder="Huisnummer">
                </div>


                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Opslaan</button>
                </div>
            </div>
        </form>
    </div>
</div>