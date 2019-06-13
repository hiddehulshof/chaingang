<div class="admin-article">
    <div class="container">
        <div class="row pb-5">
            <div class="col-sm">
                <h3><b>gebruikers</b></h3>
            </div>
            <div class="col-sm">
                <h3> producten</h3>
            </div>
            <div class="col-sm">
                <h3> mijn account</h3>
            </div>
        </div>
        <table>
            <thead>
            <tr>
                <th>Naam</th>
                <th>Adress</th>
                <th>Telefoon</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($bikes as $bike)


            <tr class="font-weight-bolder">
                <td> {{$bike->naam}}</td>
                <td> &euro;{{$bike->prijs}}</td>
                <td> {{$bike->omschrijving}}</td>
                <td>
                    <div class="buttons">
                        <a  href="admin/products/{{$bike->id}}"><button class="button"><i class="fa fa-edit"></i></button></a>
                        <button class="button button__delete"><i class="fa fa-trash"></i></button>
                    </div>
                </td>
            </tr>
            @endforeach


            </tbody>
        </table>
        <div class="article">
             <button class="button"> Voeg product toe</button>
        </div>
    </div>
</div>
