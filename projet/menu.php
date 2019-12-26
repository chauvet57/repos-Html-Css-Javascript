

<link rel="stylesheet" type="text/css" href="css/stylenav.css" />
<?php
include "principale.php";
?>
<div class="navigation" style="font-size:19px">
        <div class="toggle-wrapper">
          <span class="show">Menu</span>
          <span class="hide">Menu</span>
        </div>
        <div class="heading">Site Logo</div>
        <ul class="menu">
            
          <li><a href="liste_client.php">Liste client</a></li>
          
          <li class="has-menu">
            <a>Formulaire Investiseur</a>
            <ul class="menu">
                    <li><a href="formulaire1.php">Consultant</a></li>
                    <li><a href="formulaire2.php">Identité</a></li>
                    <li><a href="formulaire3.php">Adresse</a></li>
                    <li><a href="formulaire4.php">Coordonnées</a></li>
                    <li><a href="formulaire5.php">Situation de famille</a></li>
                    <li><a href="formulaire6.php">Personnes ratachées</a></li>
                    <li><a href="formulaire7.php">Situation professionnelle</a></li>
            </ul>
          </li>
          <li class="has-menu">
                <a>Formulaire Patrimoniale</a>
                <ul class="menu">
                        <li><a href="formulaire8.php">IR acquitté</a></li>
                        <li><a href="formulaire9.php">Revenus perçus par le foyer fiscal</a></li>
                        <li><a href="formulaire10.php">Imposition</a></li>
                        <li><a href="formulaire11.php">Patrimoine immobilier</a></li>
                        <li><a href="formulaire12.php">Patrimoine financier</a></li>
                        <li><a href="formulaire13.php">Patrimoine professionnel /Autres biens</a></li>
                        <li><a href="formulaire14.php">Financements immobilliers et autres credits</a></li>
                        <li><a href="formulaire15.php">Vos objectifs patrimoniaux</a></li>
                </ul>
              </li>
              <li class="has-menu">
                  <a>Outils</a>
                  <ul class="menu">
                      <li>
                      <a href="" onclick="window.open('calculatrice.php' , 'testpopup', 'width=320,height=450,top=200,right=20');">Calculatrice</a>
                    </li>
                  </ul>
              </li>
          <li><a href="#">Contact</a></li>
          <li><a href="#">Paramètres</a></li>
          <li><a href='principale.php?deconnexion=true'><span>Déconnexion</span></a></li>
        </ul>
      </div>





      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script>
      $(function(){

        $('.navigation .toggle-wrapper .show').on('click',function(){
          $('.navigation').addClass('open');
        });
        $('.navigation .toggle-wrapper .hide').on('click',function(){
          $('.navigation').removeClass('open');
        });
        $('.navigation .has-menu a').on('click',function(e){
          e.stopPropagation();
        });
        $('.navigation .has-menu').on('click',function(){
          $(this).toggleClass('open');
        });
        
      });
      </script>