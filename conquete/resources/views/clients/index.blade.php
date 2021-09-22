<html lang="en">

<head>
    <style>
        th,
        td,
        table {
            border: 1px solid black;
            border-collapse: collapse;
        }
        .btn-box {
            width: 100%;
            margin: 30px auto;
            text-align: center;
        }

        button {
        width: 110px;
        height: 35px;
        margin: 0 10px;
        background: linear-gradient(to right, #ff105f, #ffad06);
        border-radius: 30px;
        border: 0;
        outline: none;
        color: #fff;
        cursor: pointer;
        }
    </style>
    
    <title>Document</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
        <script src = "https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src = "https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            } );
        </script>
</head>
<body>
    <table id="example" class="display" style="width:100%">
        <caption>Client physique</caption>
        <thead>
            <tr>
                <th>Nom et Prénom / Raison_sociale</th>
                <th>Téléphone</a></th>
                <th>Offre</th>
                <th>Forfait</th>
                <th>Adresse(Ville)</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($personne_physique as $Personne_Physique)
            <tr>
                <th><a href="/physiques/{{ $physique -> id }}/edit">{{$Personne_Physique -> Nom}}</th>
                <th>{{$Personne_Physique -> Prenoms}}</th>
                <!-- <th>{{$Personne_Physique -> Raison_Sociale}}</th>
                <th>{{$Personne_Physique -> Sexe}}</th>
                <th>{{$Personne_Physique -> Nom_du_mandataire}}</th>
                <th>{{$Personne_Physique -> Qualite_du_mandataire}}</th> -->
                <th>{{$Personne_Physique -> Telephone}}</th>
                <!-- <th>{{$Personne_Physique -> Email}}</th>
                <th>{{$Personne_Physique -> Piece_id}}</th>
                <th>{{$Personne_Physique -> Boite_Postale}}</th>
                <th>{{$Personne_Physique -> Adresse}}</th>
                <th>{{$Personne_Physique -> Numero_id}}</th> -->
                <th>{{$Personne_Physique -> Type_doperation}}</th>
                <th>{{$Personne_Physique -> Particuliers}}</th>
                <th>{{$Personne_Physique -> PME}}</th>
                <!-- <th>{{$Personne_Physique -> Ville}}</th>
                <th>{{$Personne_Physique -> Commune}}</th>
                <th>{{$Personne_Physique -> Quartier}}</th>
                <th>{{$Personne_Physique -> Carre_du_lot}}</th>
                <th>{{$Personne_Physique -> Parcelle}}</th>
                <th>{{$Personne_Physique -> Boite_Postale}}</th> -->
                <!-- <th>{{$Personne_Physique -> GPS}}</th>
                <th>{{$Personne_Physique -> Longitude}}</th>
                <th>{{$Personne_Physique -> Latitude}}</th>
                <th>{{$Personne_Physique -> Batiment}}</th>
                <th>{{$Personne_Physique -> Etage}}</th>
                <th>{{$Personne_Physique -> Porte}}</th> -->
                <th>{{$Personne_Physique -> created_at}}</th>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    
    

    <div class="btn-box">
        <button type="button"><a href="/clients/create">Create</a></button> </br>
    </div>
</body>
</html>