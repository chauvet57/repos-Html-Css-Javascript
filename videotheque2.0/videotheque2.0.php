<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link rel="stylesheet" href="css/app2.0.css">

<title>Médiatèque2.0</title>
</head>
 
<body id="videotheque">
  <div style="margin: 20px;">
    <ul id="menu" style="font-size: 25px;">
      <li><a style="width: 350px;">Ma videothèque</a></li>
      <li>
        <a id="titreNav" style="width: 350px;">Titre ￬</a>
        <ul class="hidden">
          <li style="width: 350px;" id="trierTitreUp"><a>de A à Z</a></li>
          <li style="width: 350px;" id="trierTitreDown"><a>de Z à A</a></li>
        </ul>
      </li>
      <li>
        <a id="anneeNav" style="width: 350px;">Année ￬</a>
        <ul class="hidden">
          <li style="width: 350px;" id="trierAnneeUp"><a>les plus récents</a></li>
          <li style="width: 350px;" id="trierAnneeDown"><a>les plus anciens</a></li>
        </ul>
      </li>
      <li><a style="width: 350px;" id="ajouter1">Ajouter un film</a></li>
      <li><input id="inputRechercher" style="text-align: center;" type="text" name="search" placeholder="Rechercher...">
      </li>
    </ul>
    <br><br><br><br>
    <form action="" class="container">
      <div id="AjouterFilm" class="container" style="display: none ; text-align: center;">
        <input id="titre" type="text" name="titre" style="font-size: 30px;" placeholder="Titre du film" required
          minlength="1" maxlength="25" />
        <input id="annee" type="number" name="annee" style="font-size: 30px;" placeholder="Année du film" min="1900"
          max="2019" />
        <br>
        <button type="button" name="button" id="btnAjout" class="btn-Valider">Valider</button>
        <button type="button" id="btnRemoveAdd" name="button" class="btn-Supp">Annuler</button>
        <br>
      </div>
    </form>
    <div class="row"><br><br>
      <div class="card" id="PropositonFilms"></div>
    </div>
    <div class="row">
      <div class="card" id="ListeFilms"></div>
    </div>
  </div>
</body>

<!--  Scripts-->

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="./js/materialize.js"></script>
<script src="./js/anime.min.js"></script>
<script src="js/init.js"></script>
<script src="keyApi.js"></script>
<script src="./app2.0.js"></script>

</html>