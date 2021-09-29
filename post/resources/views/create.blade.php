<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=formulaire, initial-scale=1.0">
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

    /* .btn-box {
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
    } */

    /* .container {
      width: 1000px;
      height: 350px;
      margin: 8% auto;
      background: #fff;
      border-radius: 5px;
      position: relative;
    } */

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
      -webkit-animation: fadeEffect 1s;
      animation: fadeEffect 1s;
    }

    @-webkit-keyframes fadeEffect {
      from {opacity: 0;}
      to {opacity: 1;}
    }

    @keyframes fadeEffect {
      from {opacity: 0;}
      to {opacity: 1;}
    }
  </style>
</head>

<body>
  <div class="im">
    <img src="/images/index1.png" alt="Image">
  </div>
  <p class="socity">Société Béninoise d'Infrastructures Numériques (SBIN SA)</p>
  <h1 class="abonne">DEMANDE D'ABONNEMENT FTTx</h1>
  <!-- <div class="container"> -->
  <div class="tab">
    <button class="tablinks" onclick="openCity(event, 'Partie1')" id="defaultOpen">Partie1</button>
    <button class="tablinks" onclick="openCity(event, 'Partie2')">Partie2</button>
    <button class="tablinks" onclick="openCity(event, 'Partie3')">Partie3</button>
  </div>
  <!-- {{-- <form method="POST" action="create">--}} -->
  <form method="POST" action="{{ route('BigController.store') }}">
    @csrf
    <div id="identite">
      <div id="Partie1" class="tabcontent">
        <h1 class="info"> INFORMATION CLIENT</h1>
        <div class="coordonner">

          Statut :
          <input type="radio" name="Statut" id="Statut" value="pro" />
          <label for="Statut">Entreprise</label>

          <!-- <input type="radio" name="statut" id="statut" value="Organisme" />
          <label for="statut">Organisme/Institution</label>

          <input type="radio" name="statut" id="statut" value="Administration" />
          <label for="statut">Administration</label> -->

          <input type="radio" name="Statut" id="Statut" value="perso" />
          <label for="Statut">Particulier</label>

          <!-- <input type="radio" name="statut" id="statut" value="Autre" />
          <label for="statut">Autre(A préciser):</label> -->

          <!-- <div id="autre" hidden>
            <label for="autre">Autre:</label>
            <input type="text" name="autre" id="autre" />
          </div> -->

          <div id="Raison sociale" hidden>
            <label for="Raison_sociale">Raison sociale</label>
            <input type="text" name="Raison_sociale" id="Raison_sociale" />
          </div>

          <div hidden id="Physique">
            <label for="Nom">Nom</label>
            <input type="text" name="Nom" id="Nom" /></br>

            <label for="Prenom">Prénom</label>
            <input type="text" name="Prenom" id="Prenom" /><br>

            Sexe : <br>
            <input type="radio" name="Sexe" value="Masculin" id="Sexe" />
            <label for="Sexe">Masculin</label> <br>
            <input type="radio" name="Sexe" value="Feminin" id="Sexe" />
            <label for="Sexe">Feminin</label>
            </br>
          </div><br>




          Téléphone :<input type="tel" placeholder="+XXX XX XX XX XX" name="Telephone" id="Telephone" />
          <br>
          Email :<input type="email" placeholder="........................................" id="Email" name="Email"/></br>
          Boîte Postale :<input type="text"
            placeholder="..................................................................." id="Boite" name="Boite"/></br>
          Adresse :<input type="text" placeholder="........................................." id="Adresse" name="Adresse"/></br>
          <div id="mandataire" hidden>
            Nom et qualité du mandataire/représentant:<input type="text" placeholder="......................."
              id="Nom_mandataire" name = "Nom_mandataire" /></br>
            Qualité du mandataire/représentant:<input type="text" placeholder="......................."
              id="Qualite_mandataire" name = "Qualite_mandataire" /></div>
          </br>
          Piece d'identité :
          <select name="Piece" id="Piece" class="custom-select">
            <option value="Carte_identite" selected>Carte d'identité</option>
            <option value="Passeport">Passeport</option>
            <option value="Permis_de_conduire">Permis de conduire</option>
            <option value="Carte_lEPI">Carte lEPI</option>
          </select>
          N° :<input type="text" placeholder="......................."name="Numero_identite" id="Numero_identite" />

          Expire le<input type="date" placeholder="......................." />

          <p class="ope">RENSEIGNEMENTS COMPLEMENTAIRES</p>
          <p class="text-10xl">Bénéficiez-vous d'une exonération fiscale ?
            <input type="radio" name="Exoneration" id="Exoneration" value="Oui"/>
            <label for="Exoneration">Oui </label>
            <input type="radio" name="Exoneration" id="Exoneration" value="Non"/>
            <label for="Exoneration">Non (Si oui, fournir le document justificatif)</label>
          </p></br>
        </div>
      </div>

      <div id="Partie2" class="tabcontent">
        <div id="the_click">
          <p class="ope">TYPE D'OPERATION</p>
          <input type="radio" name="Type_doperation" id="Type_doperation" value="Abonnement" />
          <label for="Type_doperation">Abonnement</label>
          <input type="radio" name="Type_doperation" id="Type_doperation" value="Reabonnement" />
          <label for="Type_doperation">Réabonnement</label><br>
          <input type="radio" name="Type_doperation" id="Type_doperation" value="Suspension" />
          <label for="Type_doperation">Suspension</label>
          <input type="radio" name="Type_doperation" id="Type_doperation" value="Resiliation" />
          <label for="Type_doperation">Résiliation</label></br>
          <p id="frase" hidden>Indiquer le motif : <input type="text" placeholder="............................." id="Motif" name="Motif" />
          </p></br>
        </div>

        <div class="ope">DETAILS DE L'OPERATION</div>
        <div class="cadre2"> <U><strong class="fine">TYPE D'OFFRES FTTx</strong></U> <strong>Double play(Téléphone
            +Internet)</strong>
          <input type="radio" name="Offre" id="Offre" value="ADSL"/>
          <label for="Offre">ADSL</label>
          <input type="radio" name="Offre" id="Offre" value="FTTH"/>
          <label for="Offre">FTTH</label></br></h1>

          <div id="Résidentiels" hidden>
            Particuliers / Résidentiels
            <input type="radio" name="Forfait" id="Forfait" value="ADSL 04 Mbps" />
            <label for="Forfait">ADSL 04 Mbps </label>
            <input type="radio" name="Forfait" id="Forfait" value="Home 10 Mbps" />
            <label for="Forfait">Home 10 Mbps</label>
            <input type="radio" name="Forfait" id="Forfait" value="Home 20 Mbps" />
            <label for="Forfait">Home 20 Mbps </label>
            </br>
          </div>
          <div id="PetitesetMoyenesEntreprises" hidden>
            Petites et Moyenes Entreprises (PME)
            <input type="radio" name="Forfait" id="Forfait" value="ADSL 10 Mbps" />
            <label for="Forfait">ADSL 10 Mbps </label>
            <input type="radio" name="Forfait" id="Forfait" value="Pro 20 Mbps" />
            <label for="Forfait">Pro 20 Mbps</label>
            <input type="radio" name="Forfait" id="Forfait" value="Pro 30 Mbps" />
            <label for="Forfait">Pro 30 Mbps </label>
            <input type="radio" name="Forfait" id="Forfait" value="Pro 50 Mbps" />
            <label for="Forfait">Pro 50 Mbps</label>
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
              <option value="Cotonou">Cotonou</option>
              <option value="Abomey-Calavi">Abomey-Calavi</option>
              <option value="Ouidah">Ouidah</option>
            </select>
          </th>
          <th width="250px" height="25px">
            <input type="text" name="Quartier" placeholder="..........." id="Quartier" />
          </th>
        </tr>
        <tr>
          <th class="text-left" width="400px" height="5px">Carré du lot :
            <input type="text" name="Carre_du_lot" placeholder="..........." id="Carre_du_lot"  />
          </th>
          <th class="text-left" width="250px" height="5px">Parcelle :
            <input type="text" placeholder="..........." id="Parcelle" name="Parcelle" /></th>
          <th class="text-left" width="250px" height="5px">Boite postale :
            <input type="text" placeholder="..........." id="Boite_Postale" name="Boite_Postale"/>
          </th>
        </tr>
        <tr>
          <th class="text-left" width="300px" height="5px">Coordonnées géographiques (GPS) :
            <input type="text" id="GPS" name="GPS"/>
          </th>
          <th class="text-left" colspan="2" width="750px" height="10px">longitude
            <input type="text" placeholder="..........." id="Longitude" name="Longitude" />
            latitude<input type="text" placeholder="..........." id="Latitude" name="Latitude" />
          </th>
        </tr>  
        <tr>
          <th class="text-left" width="300px" height="5px">Bâtiment :<input type="text" id="Batiment" name="Batiment" /></th>
          <th class="text-left" width="300px" height="5px">Etage :<input type="text" id="Etage" name="Etage" /></th>
          <th class="text-left" width="300px" height="5px">Porte :<input type="text" id="Porte" name="Porte"/></th>
        </tr>
      </table>
      </p></br>

      <p align="right" class="sign">Fait à:<input type="text" placeholder=".................." />le
        <input type="date" name="Date" placeholder=".................." id="Date"/>
      </p>
      
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
      if (elt == "Suspension" || elt == "Résiliation") {
        document.getElementById("frase").style.display = 'block';
      }
      else
        document.getElementById("frase").style.display = 'none';
    }
  </script>
  <script>
    document.getElementById("identite").addEventListener("click", rad2)

    function rad2() {
      var elt = document.querySelector('input[name="Statut"]:checked').value;
      if (elt == "pro") {
        document.getElementById("Raison sociale").style.display = 'block';
      }
      else
        document.getElementById("Raison sociale").style.display = 'none';

      if (elt == "perso") {
        document.getElementById("Physique").style.display = 'block';
      }
      else
        document.getElementById("Physique").style.display = 'none';

      if (elt == "pro") {
        document.getElementById("PetitesetMoyenesEntreprises").style.display = 'block';
      }
      else
        document.getElementById("PetitesetMoyenesEntreprises").style.display = 'none';

      if (elt == "perso") {
        document.getElementById("Résidentiels").style.display = 'block';
      }
      else
        document.getElementById("Résidentiels").style.display = 'none';
      if (elt == "pro") {
        document.getElementById("mandataire").style.display = 'block';
      }
      else
        document.getElementById("mandataire").style.display = 'none';
    }
  </script>


  <script>  
    document.getElementById("identite").addEventListener("click", rad2)

    function rad2() {
      var elt = document.querySelector('input[name="Statut"]:checked').value;
      if (elt == "pro") {
        document.getElementById("PetitesetMoyenesEntreprises").style.display = 'block';
      }
      else
        document.getElementById("PetitesetMoyenesEntreprises").style.display = 'none';

      if (elt == "perso") {
        document.getElementById("Résidentiels").style.display = 'block';
      }
      else
        document.getElementById("Résidentiels").style.display = 'none';
      if (elt == "pro") {
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
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }
    document.getElementById("defaultOpen").click();
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