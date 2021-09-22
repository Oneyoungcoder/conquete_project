<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

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

        <div hidden id="Raison sociale">
          <label for="Raison_Sociale">Raison sociale</label>
          <input type="text" name="Raison_Sociale" value="{{$Personne_morale ->Raison_Sociale}}" />
        </div>

        <div hidden id="Physique">
          <label for="Nom">Nom</label>
          <input type="text" name="Nom" value="{{$Personne_physique ->Nom}}" /></br>
          <label for="Prenom">Prenom</label>
          <input type="text" name="Prenom" value="{{$Personne_physique ->Prenom}}" /><br>
          Sexe(Si applicable) : <br>
          <input type="radio" name="sexe" value="Masculin" id="sexe" />
          <label for="radio">Masculin</label> <br>
          <input type="radio" name="sexe" value="Féminin" id="sexe" />
          <label for="radio">Feminin</label>
          </br>
        </div><br>




        Téléphone :<input type="tel" placeholder="+XXX XX XX XX XX" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}"
          value="{{$client -> Telephone}}" /> <br>
        Email :<input type="email" placeholder="........................................"
          value="{{$client -> Email}}" /></br>
        Boîte Postale :<input type="text"
          placeholder="..................................................................."
          value="{{$client -> Boite_Postale}}" /></br>
        Adresse :<input type="text" placeholder="........................................."
          value="{{$client -> Adresse}}" /></br>
        <div id="mandataire" hidden>
          Nom du mandataire/représentant:<input type="text" placeholder="......................."
            value="{{$Personne_morale -> Nom_du_mandataire }}" /><br>
          Qualité du mandataire/représentant:<input type="text" placeholder="......................."
            value="{{$Personne_morale -> Qualite_du_mandataire}}" />
        </div></br>

        </br>
        Piece d'identité :
        <select name="Piece" id="Piece" class="custom-select" multiple>
          <option selected>Carte d'identité</option>
          <option value="Passeport">Passeport</option>
          <option value="Permis de conduire">Permis de conduire</option>
          <option value="Carte lEPI">Carte lEPI</option>
        </select></br>
        N° :<input type="text" placeholder="......................." value="{{Numero_id}}" />
        Expire le<input type="date" placeholder="......................." />
      </div>
    </div>

    <div id="the_click">
      <p class="ope">TYPE D'OPERATION</p>
      <input type="radio" name="Type_doperation" id="Type_doperation" value="Abonne" />
      <label for="ori">Abonnement</label>
      <input type="radio" name="Type_doperation" id="Type_doperation" value="Réabonne" />
      <label for="ori">Réabonnement</label><br>
      <input type="radio" name="Type_doperation" id="Type_doperation" value="Suspen" />
      <label for="ori">Suspension</label>
      <input type="radio" name="Type_doperation" id="Type_doperation" value="Résili" />
      <label for="Type_doperation">Résiliation</label></br>
      <p id="frase" hidden>Indiquer le motif : <input type="text" placeholder="............................." />
      </p></br>
    </div>

    <div class="ope">DETAILS DE L'OPERATION</div>
    <div class="cadre2"> <U><strong class="fine">TYPE D'OFFRES FTTx</strong></U> <strong>Double play(Téléphone +
        Internet)</strong>
      <input type="radio" name="offre" id="offre" value="ADSL" />
      <label for="offre">ADSL</label>
      <input type="radio" name="offre" id="offre" value="FTTH" />
      <label for="offre2">FTTH</label></br></h1>

      <div id="Résidentiels" hidden>
        Particuliers / Résidentiels
        <input type="radio" name="Particuliers" id="Particuliers" value="ADSL 04 Mbps" />
        <label for="Particuliers">ADSL 04 Mbps </label>
        <input type="radio" name="Particuliers" id="Particuliers" value="Home 10 Mbps" />
        <label for="Particuliers">Home 10 Mbps</label>
        <input type="radio" name="Particuliers" id="Particuliers" value="Home 20 Mbps" />
        <label for="Particuliers">Home 20 Mbps </label>
        </br>
      </div>
      <div id="PetitesetMoyenesEntreprises" hidden>
        Petites et Moyenes Entreprises (PME)
        <input type="radio" name="PME" id="PME" value="ADSL 10 Mbps" />
        <label for="moyennes">ADSL 10 Mbps </label>
        <input type="radio" name="PME" id="PME" value="Pro 20 Mbps" />
        <label for="PME">Pro 20 Mbps</label>
        <input type="radio" name="PME" id="PME" value="Pro 30 Mbps" />
        <label for="PME">Pro 30 Mbps </label>
        <input type="radio" name="PME" id="PME" value="Pro 50 Mbps" />
        <label for="PME">Pro 50 Mbps</label>
        </br>
      </div>
    </div>
    </br>

    <p class="ope">ADRESSE DE L'INSTALLATION</p>
    <p class="tableau">
    <table>
      <tr>
        <th width="250px" height="5px">Ville</th>
        <th width="250px" height="5px">Commune</th>
        <th width="250px" height="5px">Quartier</th>
      </tr>
      <tr>
        <th width="250px" height="25px">
          <div class="col-auto my-1">
          <label class="mr-sm-2 sr-only" for="Ville">Preference</label>
          <select name="Ville" id="Ville" class="custom-select">
            <option value="Cotonou">Cotonou</option>
            <option value="Calavi">Calavi</option>
            <option value="Porto-Novo">Porto-Novo</option>
            <option value="Sèmè-Kpodji">Sèmè-Kpodji</option>
            <option value="Grand-Popo">Grand-Popo</option>
            <option value="Lokossa">Lokossa</option>
            <option value="Abomey">Abomey</option>
            <option value="Bohicon">Bohicon</option>
          </select>
          </div>
        </th>
        <th width="250px" height="25px">
          <div class="form-group">
          <select name="Commune" id="Commune" class="form-control form-control-lg">
            <option value="Cotonou2">Cotonou</option>
            <option value="Abomey-Calavi">Abomey-Calavi</option>
            <option value="Ouidah">Ouidah</option>
          </select>
          </div>
        </th>
        <th width="250px" height="25px"><input type="text" name="Quartier" placeholder="........." value="Quartier" />
        </th>
      </tr>
      <tr>
        <th class="text-left" width="400px" height="5px">Carré du lot :<input type="text" placeholder="..........."
            value="Carre_du_lot" />
        </th>
        <th class="text-left" width="250px" height="5px">Parcelle :<input type="text" placeholder="..........."
            value="Parcelle" /></th>
        <th class="text-left" width="250px" height="5px">Boite postale :<input type="text" placeholder="..........."
            value="Boite_Postale" />
        </th>
      </tr>
      <tr>
        <th class="text-left" width="300px" height="5px">Coordonnées géographiques (GPS) :<input type="text"
            placeholder="..........." value="{{GPS}}" /></th>
        <th class="text-left" colspan="2" width="750px" height="10px">longitude<input type="text"
            placeholder="..........." />
          latitude<input type="text" placeholder="..........." />
        </th>
      </tr>
      <tr>
        <th class="text-left" width="300px" height="5px">Bâtiment :<input type="text" value="{{Batiment}}" /></th>
        <th class="text-left" width="300px" height="5px">Etage :<input type="text" value="Etage" /></th>
        <th class="text-left" width="300px" height="5px">Porte :<input type="text" value="Porte" /></th>
      </tr>
    </table>
    </p></br>

    <p class="ope">RENSEIGNEMENTS COMPLEMENTAIRES</p>
    <p class="text-10xl">Bénéficiez-vous d'une exonération fiscale ?
      <input type="radio" name="remplir" id="remplir" />
      <label for="remplir">Oui </label>
      <input type="radio" name="remplir" id="remplir" />
      <label for="remplir">Non (Si oui, fournir le document justificatif)</label>
    </p></br>

    <p class="ope">A REMPLIR PAR LE CLIENT</p>
    <p>Je reconnais avoir lu et pris connaissances des Conditions Générales d'utilisation des services FTTx de SBIN
      ci-jointes au présent</br>
      formulaire, et les accepte dans leur intégralité.
    </p>
    <p align="right" class="sign">Fait à:<input type="text" placeholder=".................." />le
      <input type="date" placeholder=".................." id="Date"/>
    </p>
    <p align="right" class="sign">Signature du client</p><br>
    <p class="ope">A REMPLIR PAR SBIN</p>

    <p>Numéro Ligne/Liaison:<input type="text"
        placeholder="......................................................................" /></p>
    <p>Pop:<input type="text"
        placeholder="......................................................................" />Agent/Position :
      <input type="text" placeholder=".................." />
    </p>
    <p>Référence de la demande :<input type="text"
        placeholder="......................................................................" />Date
      d'enregistrement :
      <input type="text" placeholder=".................." />
    </p>
    <div class="sign1">Signature Agent Pop</div>
    <div class="sign2">Signature Chef Pop</div><br><br><br><br>
    <input type="submit" value="Envoyer" /></br>


    <script>
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