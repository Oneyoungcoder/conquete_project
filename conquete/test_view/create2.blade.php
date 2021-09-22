<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=formulaire, initial-scale=1.0">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> -->

  <!-- <link href="formulaire2.css" rel="stylesheet"> -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script> -->

  <title>Formulaire</title>
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

    .container {
      width: 1000px;
      height: 350px;
      margin: 8% auto;
      background: #fff;
      border-radius: 5px;
      position: relative;
    }

    .tab {
      overflow: hidden;
      border: 1px solid #ccc;
      background-color: #f1f1f1;
    }

    .tab button {
      background-color: inherit;
      float: left;
      border: none;
      outline: none;
      cursor: pointer;
      padding: 14px 16px;
      transition: 0.3s;
      font-size: 17px;
    }

    .tab button:hover {
      background-color: #ddd;
    }

    .tab button.active {
      background-color: #ccc;
    }

    .tabcontent {
      display: none;
      padding: 3px 6px;
      border: 1px solid #ccc;
      border-top: none;
    }
  </style>
</head>

<body>
  <div class="im">
    <img src="/images/index1.png" alt="Image">
  </div>
  <!-- @csrf -->
  <p class="socity">Société Béninoise d'Infrastructures Numériques (SBIN SA)</p>
  <h1 class="abonne">DEMANDE D'ABONNEMENT FTTx</h1>
  <!-- <div class="container"> -->
  <div class="tab">
    <button class="tablinks" onclick="openCity(event, 'Partie1')">Partie1</button>
    <button class="tablinks" onclick="openCity(event, 'Partie2')">Partie2</button>
    <button class="tablinks" onclick="openCity(event, 'Partie3')">Partie3</button>
  </div>
  <form method="POST">
    <div id="identite">
      <div id="Partie1" class="tabcontent">
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
            <input type="text" name="Raison sociale" id="Raison_Sociale" />
          </div>

          <div hidden id="Physique">
            <label for="Nom">Nom</label>
            <input type="text" name="Nom" id="Nom" /></br>

            <label for="Prenom">Prénom</label>
            <input type="text" name="Prenom" id="Prenom" /><br>

            Sexe(Si applicable) : <br>
            <input type="radio" name="sexe" value="Masculin" id="Sexe" />
            <label for="radio">Masculin</label> <br>
            <input type="radio" name="sexe" value="Feminin" id="Sexe" />
            <label for="radio">Feminin</label>
            </br>
          </div>




          Téléphone :<input type="tel" placeholder="+XXX XX XX XX XX" pattern="[0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}"
            id="Telephone" />
          <br>
          Email :<input type="email" placeholder="........................................" id="Email" /></br>
          Boîte Postale :<input type="text"
            placeholder="..................................................................." id="Boite_Postale" /></br>
          Adresse :<input type="text" placeholder="........................................." id="Adresse" /></br>
          <div id="mandataire" hidden>
            Nom et qualité du mandataire/représentant:<input type="text" placeholder="......................."
              id="Nom_du_mandataire" /></br>
            Qualité du mandataire/représentant:<input type="text" placeholder="......................."
              id="Qualite_du_mandataire" /></div>
          </br>
          Piece d'identité :
          <select name="Piece" id="Piece_id" class="custom-select">
            <option value="Carte_id" selected>Carte d'identité</option>
            <option value="Passeport">Passeport</option>
            <option value="Permis_de_conduire">Permis de conduire</option>
            <option value="Carte_lEPI">Carte lEPI</option>
          </select>
          N° :<input type="text" placeholder="......................." id="Numero_id" />

          Expire le<input type="date" placeholder="......................." />

          <p class="ope">RENSEIGNEMENTS COMPLEMENTAIRES</p>
          <p class="text-10xl">Bénéficiez-vous d'une exonération fiscale ?
            <input type="radio" name="remplir" id="remplir" />
            <label for="remplir">Oui </label>
            <input type="radio" name="remplir" id="remplir" />
            <label for="remplir">Non (Si oui, fournir le document justificatif)</label>
          </p></br>
        </div>
      </div>

      <div id="Partie2" class="tabcontent">
        <div id="the_click">
          <p class="ope">TYPE D'OPERATION</p>
          <input type="radio" name="Type_doperation" id="Type_doperation" value="Abonne" />
          <label for="Type_doperation">Abonnement</label>
          <input type="radio" name="Type_doperation" id="Type_doperation" value="Réabonne" />
          <label for="Type_doperation">Réabonnement</label><br>
          <input type="radio" name="Type_doperation" id="Type_doperation" value="Suspen" />
          <label for="Type_doperation">Suspension</label>
          <input type="radio" name="Type_doperation" id="Type_doperation" value="Résili" />
          <label for="Type_doperation">Résiliation</label></br>
          <p id="frase" hidden>Indiquer le motif : <input type="text" placeholder="............................." />
          </p></br>
        </div>

        <div class="ope">DETAILS DE L'OPERATION</div>
        <div class="cadre2"> <U><strong class="fine">TYPE D'OFFRES FTTx</strong></U> <strong>Double play(Téléphone
            +Internet)</strong>
          <input type="radio" name="offre" id="offre" />
          <label for="offre">ADSL</label>
          <input type="radio" name="offre" id="offre" />
          <label for="offre">FTTH</label></br></h1>

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
            <label for="PME">ADSL 10 Mbps </label>
            <input type="radio" name="PME" id="PME" value="Pro 20 Mbps" />
            <label for="PME">Pro 20 Mbps</label>
            <input type="radio" name="PME" id="PME" value="Pro 30 Mbps" />
            <label for="PME">Pro 30 Mbps </label>
            <input type="radio" name="PME" id="PME" value="Pro 50 Mbps" />
            <label for="PME">Pro 50 Mbps</label>
            </br>
          </div>
        </div>
      </div>
    </div>

    <div id="Partie3" class="tabcontent">
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
            <select name="Ville" id="Ville">
              <option value="Cotonou">Cotonou</option>
              <option value="Calavi">Calavi</option>
              <option value="Porto-Novo">Porto-Novo</option>
              <option value="Sèmè-Kpodji">Sèmè-Kpodji</option>
              <option value="Grand-Popo">Grand-Popo</option>
              <option value="Lokossa">Lokossa</option>
              <option value="Abomey">Abomey</option>
              <option value="Bohicon">Bohicon</option>
            </select>
          </th>
          <th width="250px" height="25px">
            <select name="Commune" id="Commune">
              <option value="Cotonou2">Cotonou</option>
              <option value="Abomey-Calavi">Abomey-Calavi</option>
              <option value="Ouidah">Ouidah</option>
            </select>
          </th>
          <th width="250px" height="25px"><input type="text" name="Quartier" placeholder="..........." id="Quartier" />
          </th>
        </tr>
        <tr>
          <th class="text-left" width="400px" height="5px">Carré du lot :<input type="text" placeholder="..........."
              id="Carre_du_lot" />
          </th>
          <th class="text-left" width="250px" height="5px">Parcelle :<input type="text" placeholder="..........."
              id="Parcelle" /></th>
          <th class="text-left" width="250px" height="5px">Boite postale :<input type="text" placeholder="..........."
              id="Boite_Postale" />
          </th>
        </tr>
        <tr>
          <th class="text-left" width="300px" height="5px">Coordonnées géographiques (GPS) :<input type="text"
              id="GPS" />
          </th>
          <th class="text-left" colspan="2" width="750px" height="10px">longitude<input type="text"
              placeholder="..........." id="Longitude" />
            latitude<input type="text" placeholder="..........." id="Latitude" />
          </th>
        </tr>
        <tr>
          <th class="text-left" width="300px" height="5px">Bâtiment :<input type="text" id="Batiment" /></th>
          <th class="text-left" width="300px" height="5px">Etage :<input type="text" id="Etage" /></th>
          <th class="text-left" width="300px" height="5px">Porte :<input type="text" id="Porte" /></th>
        </tr>
      </table>
      </p></br>
      <div class="btn-box">
        <button type="submit">Submit</button>
      </div>
    </div>
  </form>
  </div>


  <script>
    document.getElementById("the_click").addEventListener("click", rad)

    function rad() {
      var elt = document.querySelector('input[name="Type_doperation"]:checked').value;
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
  <script>
    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }
  </script>


  <!-- <p class="ope">A REMPLIR PAR LE CLIENT</p>
  <p>Je reconnais avoir lu et pris connaissances des Conditions Générales d'utilisation des services FTTx de SBIN
    ci-jointes au présent</br>
    formulaire, et les accepte dans leur intégralité.
  </p>

  <p align="right" class="sign">Fait à:<input type="text" placeholder=".................." />le
    <input type="date" placeholder=".................." id="Date" value="" />
  </p>

  <p align="right" class="sign">Signature du client</p><br>
  <p class="ope">A REMPLIR PAR SBIN</p>

  <p>Numéro Ligne/Liaison:<input type="text"
      placeholder="......................................................................" />
  </p>


  <p>Pop:<input type="text"
      placeholder="......................................................................" />Agent/Position :
    <input type="text" placeholder=".................." />
  </p>

  <p>Référence de la demande :<input type="text"
      placeholder="......................................................................" />Date d'enregistrement :
    <input type="date" placeholder=".................." />
  </p>

  <div class="sign1">Signature Agent Pop</div>
  <div class="sign2">Signature Chef Pop</div><br><br><br><br>
 -->

  <!-- <input type="submit" value="Envoyer" /></br> -->

</body>

</html>