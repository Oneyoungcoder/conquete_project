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
            @foreach($bigs as $big)
            <tr>
                <th><a href="{{ $big->id }}/edit">{{$big->Name}}</th>
                <th>{{$big->Telephone}}</th>
                <th>{{$big->Offre}}</th>
                <th>{{$big->Forfait}}</th>
                <th>{{$big->Adresse}}</th>
                <th>{{$big->created_at}}</th>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    
    

    <div class="btn-box">
        <button type="button"><a href="/create">Create</a></button> </br>
    </div>
</body>
</html>