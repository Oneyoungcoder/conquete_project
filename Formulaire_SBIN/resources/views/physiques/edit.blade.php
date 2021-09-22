<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .coordonner {
            border: 1px black solid;
        }

        .socity {
            text-align: center;
        }

        .im {
            text-align: center;
        }

        .abonne {
            text-align: center;
            font-size: medium;
        }

        .info,
        .ope {
            text-align: left;
            font-weight: bold;
            font-size: medium;
        }
    </style>
</head>

<body>
    <form method="POST" action="/physiques/{{ $physique->id }}">
    
    
        @csrf
        @method('PUT')
        <div class="im">
            <img src="/images/index1.png" alt="Image">
        </div>
        
        <p class="socity">Société Béninoise d'Infrastructures Numériques (SBIN SA)</p>
        <h1 class="abonne">DEMANDE D'ABONNEMENT FTTx</h1>
        <h1 class="info"> INFORMATION CLIENT</h1>
        <div class="coordonner">
        
            <div class="identite">
                <!-- Statut :
                <input type="radio" name="statut" id="statut" value="Entreprise" />
                <label for="statut">Entreprise</label>

                <input type="radio" name="statut" id="statut" value="Organisme" />
                <label for="statut">Organisme/Institution</label>

                <input type="radio" name="statut" id="statut" value="Administration" />
                <label for="statut">Administration</label>

                <input type="radio" name="statut" id="statut" value="Particulier" />
                <label for="statut">Particulier</label>

                <input type="radio" name="statut" id="statut" value="Autre" />
                <label for="statut">Autre(A préciser):</label>

                <div id="autre" hidden>
                    <label for="autre">Autre:</label>
                    <input type="text" name="autre" id="autre" />
                </div>

                 -->
                 <div id="Raison_Sociale">
                    <label for="Raison_Sociale">Raison sociale</label>
                    <input type="text" name="Raison_Sociale" id="Raison_Sociale"/>
                </div>
                <div id="Physique">
                
                <label for="Nom">Nom</label>
                    <input type="text" name="Nom" id="Nom" value="{{ $physique-> Nom}}"/></br>
                    <label for="Prenom">Prénom</label>
                    <input type="text" name="Prenom" id="Prenom" value="{{ $physique-> Prenom}}"/><br>
                    Sexe: <br>
                    <input type="radio" name="Sexe" id="Sexe" value="{{ $physique-> Sexe}}"/>
                    <label for="radio">Masculin</label> <br>
                    <input type="radio" name="Sexe"  id="Sexe" value="{{ $physique->Sexe}}" />
                    <label for="radio">Feminin</label>
                </div><br>
                Nom du mandataire/représentant:<input type="text"
            placeholder="......................." id="Nom_du_mandataire" name="Nom_du_mandataire" value="{{ $physique-> Nom_du_mandataire }}"/></br>
            Qualité du mandataire/représentant:<input type="text"
            placeholder="......................." id="Qualité_du_mandataire" name="Qualité_du_mandataire" value="{{ $physique-> Qualité_du_mandataire }}"/></br>
            </div>
        </div>

        <!-- <script>
            document.getElementById("identite").addEventListener("click", rad2)

            function rad2() {
                var elt = document.querySelector('input[name="statut"]:checked').value;
                if (elt == "Particulier") {
                    document.getElementById("Physique").style.display = 'block';
                }
                else
                    document.getElementById("Physique").style.display = 'none';
            }
        </script> -->
        <button>Update</button><br>
    </form>

    <form method="POST" action = "/physiques/{{ $physique->id }}">
            @csrf
            @method ('DELETE')
            <button>Delete</button>
    </form>
</body>

</html>