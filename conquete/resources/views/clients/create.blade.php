<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=formulaire, initial-scale=1.0">
  <link href="formulaire2.css" rel="stylesheet">
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
  </style>
</head>

<body>
  <form method="POST" action="/clients">
    <div class="im">
      <img src="/images/index1.png" alt="Image">
    </div>
    @csrf
    <p class="socity">Société Béninoise d'Infrastructures Numériques (SBIN SA)</p>
    <h1 class="abonne">DEMANDE D'ABONNEMENT FTTx</h1>
    <input type="submit" value="Envoyer" /></br>
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
          <label for="Raison sociale">Raison sociale</label>
          <input type="text" name="Raison sociale" />
        </div>

        <div hidden id="Physique">
          <label for="Nom">Nom</label>
          <input type="text" name="Nom"   /></br>
          <label for="Prénom">Prénom</label>
          <input type="text" name="Prénom"   /><br>
          Sexe(Si applicable) : <br>
          <input type="radio" name="sexe" value="Masculin" id="sexe"   />
          <label for="radio">Masculin</label> <br>
          <input type="radio" name="sexe" value="Féminin" id="sexe"   />
          <label for="radio">Feminin</label>
          </br>
        </div><br>




       Téléphone :<input type="tel" placeholder="+XXX XX XX XX XX"
          pattern="[0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}"   /> <br>
          Email :<input type="email"
          placeholder="........................................"   /></br>
        Boîte Postale :<input type="text"
          placeholder="..................................................................."   /></br>
        Adresse :<input type="text" placeholder="........................................."   /></br>
        <div id="mandataire" hidden>
          Nom et qualité du mandataire/représentant:<input type="text"
            placeholder="......................."   /></br>
          Qualité du mandataire/représentant:<input type="text"
            placeholder="......................."  /></div>
        </br>
        IFU <input type="number"><br>
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
      <div id="the_click">
        <p class="ope">TYPE D'OPERATION</p>
        <input type="radio" name="ori" id="ori" value="Abonne"   />
        <label for="ori">Abonnement</label>
        <input type="radio" name="ori" id="ori" value="Réabonne" />
        <label for="ori">Réabonnement</label><br>
        <input type="radio" name="ori" id="ori" value="Suspen" /> 
        <label for="ori">Suspension</label>
        <input type="radio" name="ori" id="ori" value="Résili" />
        <label for="ori">Résiliation</label></br>
        <p id="frase" hidden>Indiquer le motif : <input type="text" placeholder="............................." />
        </p></br>
      </div>

      <div class="ope">DETAILS DE L'OPERATION</div>
      <div class="cadre2"> <U><strong class="fine">TYPE D'OFFRES FTTx</strong></U> <strong>Double play(Téléphone +
          Internet)</strong>
        <input type="radio" name="offre" id="offre"   />
        <label for="offre">ADSL</label>
        <input type="radio" name="offre" id="offre"   />
        <label for="offre2">FTTH</label></br></h1>

        <div id="Résidentiels" hidden>
          Particuliers / Résidentiels
          <input type="radio" name="particulier" id="offre" value="ADSL 04 Mbps"   />
          <label for="particulier">ADSL 04 Mbps </label>
          <input type="radio" name="particulier" id="offre" value="Home 10 Mbps" />
          <label for="particulier">Home 10 Mbps</label>
          <input type="radio" name="particulier" id="offre" value="Home 20 Mbps" />
          <label for="particulier">Home 20 Mbps </label>
          </br>
        </div>
        <div id="PetitesetMoyenesEntreprises" hidden>
          Petites et Moyenes Entreprises (PME)
          <input type="radio" name="moyennes" id="offre" value="ADSL 10 Mbps"   />
          <label for="moyennes">ADSL 10 Mbps </label>
          <input type="radio" name="moyennes" id="offre" value="Pro 20 Mbps" />
          <label for="moyennes">Pro 20 Mbps</label>
          <input type="radio" name="moyennes" id="offre" value="Pro 30 Mbps" />
          <label for="moyennes">Pro 30 Mbps </label>
          <input type="radio" name="moyennes" id="offre" value="Pro 50 Mbps" />
          <label for="moyennes">Pro 50 Mbps</label>
          </br>
        </div>
      </div>
      </br>
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

    <p class="ope">ADRESSE DE L'INSTALLATION</p>
    <p class="tableau">
    <table>
      <!-- <tr>
        <th>ADRESSE DE L'INSTALLATION</th>
      </tr> -->
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
        <th width="250px" height="25px"><input type="text" name="Quartier" placeholder="..........."   /></th>
      </tr>
      <tr>
        <th class="text-left" width="400px" height="5px">Carré du lot :<input type="text" placeholder="..........."
              />
        </th>
        <th class="text-left" width="250px" height="5px">Parcelle :<input type="text" placeholder="..........."
              /></th>
        <th class="text-left" width="250px" height="5px">Boite postale :<input type="text" placeholder="..........."
              />
        </th>
      </tr>
      <tr>
        <th class="text-left" width="300px" height="5px">Coordonnées géographiques (GPS) :</th>
        <th class="text-left" colspan="2" width="750px" height="10px">longitude<input type="text"
            placeholder="..........."   />
          latitude<input type="text" placeholder="..........."   />
        </th>
      </tr>
      <tr>
        <th class="text-left" width="300px" height="5px">Bâtiment :<input type="text"   /></th>
        <th class="text-left" width="300px" height="5px">Etage :<input type="text"   /></th>
        <th class="text-left" width="300px" height="5px">Porte :<input type="text"   /></th>
      </tr>
    </table>
    </p></br>

    <p class="ope">RENSEIGNEMENTS COMPLEMENTAIRES</p>
    <p class="text-10xl">Bénéficiez-vous d'une exonération fiscale ?
      <input type="radio" name="remplir" id="remplir"   />
      <label for="remplir">Oui </label>
      <input type="radio" name="remplir" id="remplir" />
      <label for="remplir">Non (Si oui, fournir le document justificatif)</label>
    </p></br>

    <p class="ope">A REMPLIR PAR LE CLIENT</p>
    <p>Je reconnais avoir lu et pris connaissances des Conditions Générales d'utilisation des services FTTx de SBIN
      ci-jointes au présent</br>
      formulaire, et les accepte dans leur intégralité.
    </p>
    <p align="right" class="sign">Fait à:<input type="text" placeholder=".................."   />le
      <input type="date" placeholder=".................."   />
    </p>
    <p align="right" class="sign">Signature du client</p><br>
    <p class="ope">A REMPLIR PAR SBIN</p>

    <p>Numéro Ligne/Liaison:<input type="text"
        placeholder="......................................................................"   /></p>
    <p>Pop:<input type="text" placeholder="......................................................................"
          />Agent/Position :
      <input type="text" placeholder=".................."   />
    </p>
    <p>Référence de la demande :<input type="text"
        placeholder="......................................................................"   />Date
      d'enregistrement :
      <input type="text" placeholder=".................."   />
    </p>
    <div class="sign1">Signature Agent Pop</div>
    <div class="sign2">Signature Chef Pop</div><br><br><br><br>
  </form>
</body>

</html>