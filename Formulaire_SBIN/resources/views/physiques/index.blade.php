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
                <th>Raison Sociale</th>
                <th>Nom_mandatiare</th>
                <th>Qualité_mandatiare</th>
            </tr>
        </thead>
        <tbody>
            @foreach($physique as $physiques)
            <tr>
                <th><a href="/physiques/{{ $physique -> id }}/edit"  >{{$physiques -> Nom}}</a></th>
                <th>{{$physiques -> Prenom}}</th>
                <th>{{$physiques -> Sexe}}</th>
                <th>{{$morales -> Raison_Sociale}}</th>
                <th>{{$morales -> Nom_du_mandataire}}</th>
                <th>{{$morales -> Qualité_du_mandataire}}</th>                
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    <a href="/physiques/create">Add</a>
</body>
</html>