<div class="contact">
        <div class="container">
            <h2>Schrijf een review</h2>
            <hr>
            <form method="post" class="w-100">
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label class="contact__label" for="InputFirstname">Voornaam *</label>
                        <input type="text" class="form-control" name="firstname" id="InputFirstname"
                               aria-describedby="firstname" placeholder="Voornaam" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <label class="contact__label" for="InputLastname">Achternaam *</label>
                        <input type="text" class="form-control" name="lastname" id="InputLastname"
                               aria-describedby="lastname"
                               placeholder="Achternaam" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <label class="contact__label" for="InputTelephone">Telefoonnummer</label>
                        <input type="tel" class="form-control" name="phonenumber" id="InputTelephone"
                               aria-describedby="telephone" placeholder="Telefoonnummer">
                    </div>
                    <div class="col-md-6 form-group">
                        <label  class="contact__label" for="InputEmail">E-mailadres *</label>
                        <input type="email" class="form-control" name="e-mail" id="InputEmail" aria-describedby="email"
                               placeholder="Emailadres" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <label class="contact__label" for="InputSubject">Titel *</label>
                        <input type="text" class="form-control" name="subject" id="InputSubject" aria-describedby="subject"
                               placeholder="Titel" required>
                    </div>
                    <div class="col-md-12 form-group">
                        <label class="contact__label" for="InputQuestion">Uw review *</label>
                        <textarea class="form-control" name="textfield" id="InputQuestion" aria-describedby="question"
                                  placeholder="Uw vraag" rows="5" required></textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <input class="contact__checkbox" type="checkbox" id="checkbox">
                        <label class="form-check-label contact__label" for="checkbox">Ik ga akkoord met het verzenden van bovenstaande
                            gegevens *</label>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Verstuur</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
