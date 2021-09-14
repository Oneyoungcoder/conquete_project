<html lang="en">

<head>
    <style>
        th,
        td,
        table {
            border: 1px solid black;
            border-collapse: collapse;
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
                <th>Nom</th>
                <th>Prenoms</th>
                <th>Sexe</th>
                <th>IFU_physique</th>
                <!-- <th>Nom_mandataire</th>
                <th>Qualite_mandataire</th>  
                <th>Numero</a></th>
                <th>Email</th>
                <th>Pièce identité</th>
                <th>Boîte Postal</th>
                <th>Adresse</th>
                <th>Exonération</th> -->
            </tr>
        </thead>
        <tbody>
            @foreach($personne_physique as $Personne_Physique)
            <tr>
                <th>{{$Personne_Physique -> Nom}}</th>
                <th>{{$Personne_Physique -> Prenoms}}</th>
                <th>{{$Personne_Physique -> Sexe}}</th>
                <th>{{$Personne_Physique -> IFU_physique}}</th>
                <!-- <th>{{$Client -> Nom_mandataire}}</th>
                <th>{{$Client -> Qualite_mandataire}}</th>
                <th><a href="/Clients/{{ $Client->id }}/edit">{{$Client -> Numero}}</a></th>
                <th>{{$Client -> Email}}</th>
                <th>{{$Client -> Adresse}}</th>
                <th>{{$Client -> Exonération}}</th> -->
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    
    <a href="/clients/create">Add</a>
</body>
</html>