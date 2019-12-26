<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php



?>
<?php
require_once "conn.php";
    
function resultat_athl() {
try {
    $conn=conn();
    $stmt = $conn->prepare("SELECT * FROM resultat_athl");
    $stmt->execute();
    $resultat_athl = $stmt->fetchAll();

    return $resultat_athl;
}
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
$resultat_athl = resultat_athl();
?>


<html>
    
<head>
        <title>Site GRAND PRIX 2019</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="stylescss.css" /> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        
    </head>
    <body>
        <header>
        <h1><nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
 <a class="navbar-brand" href="#"> <h1><big><big><big>GRAND PRIX 2019</big></big></big></h1></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
</li>
      <li class="nav-item">
         <a class="nav-link" href="federation.php"> Fédération </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="specialite.php"> Spécialité </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="session.php"> Session </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="athlete.php"> Athletes </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="hebergement.php"> Hebergements </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="transport.php"> Transports </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="stade.php"> Stades </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="eliminatoire.php"> Eliminatoires </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="epreuve.php"> Epreuves </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="procedure.php"> Procédures </a>
      </li>
</nav>

<header>

<body class="bg-dark">
<main class="container mt-5">
<table class="table table-hover">
<thead class="bg-light">

<table class="table table-secondary">
  <thead>
    <tr>
     
      <th scope="col">Points</th>
      <th scope="col">Rang</th>
      <th scope="col">Record</th>
    </tr>
  </thead>
  <tbody>
  <?php
    for($i=0; $i<sizeof($resultat_athl); $i++){

?>
    <tr>
    
    <th><?php echo $resultat_athl[$i]['POINTS_ATHLETE'];?></th>
    <th><?php echo $resultat_athl[$i]['RANG_ATHLETE'];?></th>
    <th><?php echo $resultat_athl[$i]['RECORD'];?></th>
</tr>

<?php
}
?>
</tbody>
</table></h1>
</main>
</body>

</html>