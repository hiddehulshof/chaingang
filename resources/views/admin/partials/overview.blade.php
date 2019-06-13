<div class="admin-article">
    <div class="container">
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
