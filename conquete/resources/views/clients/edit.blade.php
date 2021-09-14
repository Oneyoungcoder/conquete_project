<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    th {
      border: 1px solid black;
    }

    table {
      border-collapse: collapse;
    }

    .socity {
      text-align: center;
    }

    .abonne {
      text-align: center;
      font-size: medium;
    }

    .sign1 {
      text-align: left;
      font-weight: bold;
    }

    .sign2 {
      text-align: right;
      font-weight: bold;
    }

    .info,
    .ope {
      text-align: left;
      font-weight: bold;
      font-size: medium;
    }

    .sign {
      font-weight: bold;
      text-align: center;
    }

    .surligne {
      text-decoration: overline;
      text-align: center;
    }

    .surlign {
      text-align: center;
    }

    .coordonner {
      border: 1px black solid;
    }

    .cadre2 {
      border: 1px black solid;
    }

    .over {
      border: 1px black solid;
    }

    .underlin {
      text-decoration: underline;
    }

    .fine {
      text-decoration: underline;
    }

    .im {
      text-align: center;
    }
    .cadre1 {
      text-align: center;
    }
  </style>
</head>
<body>
    <form method="POST" action="/clients/{{ $client->id }}">
        @method('PUT')
        
        @csrf
        <p class="socity">Société Béninoise d'Infrastructures Numériques (SBIN SA)</p>
    <h1 class="abonne">DEMANDE D'ABONNEMENT FTTx</h1>
    
    <div id="identite">
      <h1 class="info"> INFORMATION CLIENT</h1>
      <div class="coordonner">
        
        Statut :
        <input type="radio" name="statut" id="statut" value="Nom" />
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

        <div hidden id="Raison sociale">
          <label for="Raison sociale">Raison sociale</label>
          <input type="text" name="Raison sociale" value="{{$Personne_morale ->Raison_sociale}}"/>
        </div>

        <div hidden id="Physique">
          <label for="Nom">Nom</label>
          <input type="text" name="Nom" value="{{$Personne_physique ->Nom}}"   /></br>
          <label for="Prenom">Prenom</label>
          <input type="text" name="Prenom" value="{{$Personne_physique ->Prenom}}"  /><br>
          Sexe(Si applicable) : <br>
          <input type="radio" name="sexe" value="Masculin" id="sexe"   />
          <label for="radio">Masculin</label> <br>
          <input type="radio" name="sexe" value="Féminin" id="sexe"   />
          <label for="radio">Feminin</label>
          </br>
        </div><br>




       Téléphone :<input type="tel" placeholder="+XXX XX XX XX XX"
          pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" value="{{$client -> Numero}}"   /> <br>
          Email :<input type="email"
          placeholder="........................................" value="{{$client -> Email}}"  /></br>
        Boîte Postale :<input type="text"
          placeholder="..................................................................." value="{{$client -> Boite}}"  /></br>
        Adresse :<input type="text" placeholder="........................................." value="{{$client -> Adresse}}"  /></br>
        <div id="mandataire" hidden>
          Nom du mandataire/représentant:<input type="text"
            placeholder="......................." value="{{$Personne_morale -> Nom du mandataire"   /></div></br>
          Qualité du mandataire/représentant:<input type="text"
            placeholder="......................." value="{{$Personne_morale -> Qualite_mandataire"   /></div></br>
        Piece d'identité :
        <select name="Piece" id="Piece">
          <option value="Carte d'identité">Carte d'identité</option>
          <option value="Passeport">Passeport</option>
          <option value="Permis de conduire">Permis de conduire</option>
          <option value="Carte lEPI">Carte lEPI</option>
        </select>
        N° :<input type="text" placeholder="......................."   />
        Expire le<input type="date" placeholder="......................."   />
      </div>
      <script>
      //document.getElementById("frase").style.display = 'none';zz
      document.getElementById("the_click").addEventListener("click", rad)

      function rad() {
        var elt = document.querySelector('input[name="ori"]:checked').value;
        if (elt == "Suspen" || elt == "Résili") {
          document.getElementById("frase").style.display = 'block';
        }
        else
          document.getElementById("frase").style.display = 'none';
      }
    </script>
    <script>
      document.getElementById("identite").addEventListener("click", rad2)

      function rad2() {
        var elt = document.querySelector('input[name="statut"]:checked').value;
        if (elt == "Entreprise" || elt == "Organisme" || elt == "Administration") {
          document.getElementById("Raison sociale").style.display = 'block';
        }
        else
          document.getElementById("Raison sociale").style.display = 'none';

        if (elt == "Particulier") {
          document.getElementById("Physique").style.display = 'block';
        }
        else
          document.getElementById("Physique").style.display = 'none';

        if (elt == "Autre") {
          document.getElementById("autre").style.display = 'block';
        }
        else
          document.getElementById("autre").style.display = 'none';

        if (elt == "Entreprise" || elt == "Organisme" || elt == "Administration") {
          document.getElementById("PetitesetMoyenesEntreprises").style.display = 'block';
        }
        else
          document.getElementById("PetitesetMoyenesEntreprises").style.display = 'none';

        if (elt == "Particulier") {
          document.getElementById("Résidentiels").style.display = 'block';
        }
        else
          document.getElementById("Résidentiels").style.display = 'none';
        if (elt == "Entreprise" || elt == "Organisme" || elt == "Administration") {
          document.getElementById("mandataire").style.display = 'block';
        }
        else
          document.getElementById("mandataire").style.display = 'none';

      }
    </script>

        <button>Update</button></br>
        <a href="/clients/">Cancel</a></br>
    </form>
</body>
</html>