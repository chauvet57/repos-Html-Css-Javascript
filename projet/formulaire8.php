<!DOCTYPE html>
<html lang="en">

<head> 
<!-- ############################################################################################################################# -->

    <title>Formulaire Patrimonial Page 1</title>

<?php
include "menu.php";
include "includes/header.php";
?>

</head>

<body >

<main class="container col-lg-9">
<br><br><br>
<!-- ############################################################################################################################# -->

<form action="formulaire9.php" methode="POST">
      <fieldset>
        <div class="text-center border ">
        <legend>
        <div class="text-right">
              <br>
                        <h2><span id="date_heure"></span></h2>
                        <script type="text/javascript">window.onload = date_heure('date_heure');</script>
                </div>
                
        <h1>FICHE PATRIMONIALE(Version Février 2019)</h1></legend>
        <legend><h1>VOTRE SITUATION FISCALE ET PATRIMONIALE</h1></legend>
        <div class="progress-outer container col-lg-8">
                                <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-danger" style="width:0%;">
                                        </div>
                                        <div class="progress-value"><span>0</span>%
                                    </div>
                                </div>       
                        </div>
</div>
</fieldset>
<br>
<fieldset>
<div class="container-fluid" >
            <div class="row">
                  <div class="col-lg-6 border ">

                        <div class="text-center">
                        <br> 
                              <div class="input-group mb-3">
                                        
                                    <legend><h2>Investisseur 1</h2><br></legend>
                                    <br>
                                    <br>
                                    <label for="nom">Nom:</label>
                                    <input class="container col-lg-4" type="text" name="nom" id="nom" pattern="[A-Za-z ]{1,}" />
                                    <label for="prenom">Prénom:</label>
                                    <input class="container col-lg-4" type="text" name="prenom" id="prenom" pattern="[A-Za-z ]{1,}" />
                              </div>
                        </div>
                  </div>

                  <div class="col-lg-6 border ">

                        <div class="text-center"> 
                        <br>
                                <div class="input-group mb-3">
                                          
                                    <legend><h2>Investisseur 2</h2><br></legend>
                                    <br>
                                    <br>
                                    <label for="nom">Nom:</label>
                                    <input class="container col-lg-4" type="text" name="nom" id="nom" pattern="[A-Za-z ]{1,}" />
                                    <label for="prenom">Prénom:</label>
                                    <input class="container col-lg-4" type="text" name="prenom" id="prenom" pattern="[A-Za-z ]{1,}" />
                              </div>
                        </div>
                  </div>
            </div>
      </div>
</fieldset>
<br>
<fieldset>
	<div class="text-center border ">           
		<legend><h1>FISCALITE</h1></legend>		
	</div>

    <div class="container-fluid" >
		<div class="row">
			<div class="col-lg-6 border ">

				<div class="text-center"> 
                        <br>          
                                    <legend><h2>IR Aquitté en <input style="width:130px;height:34px;font-size:20;" type="date" name="dateIr1[]" id="dateIr1"></h2></legend>
                                    <br>
                                    
                                    <label for="TotSalaire1">Totale des Salaire et Assimilés (€) :</label>
                                    <input class=" col-lg-6" type="text" name="TotSalaire1" id="TotSalaire1" pattern="[0-9,. ]{1,}" />
                                    <br><br>
                                    <label for="PensionRet1">Pension, Retraites, Rentes (€) :</label>
                                    <input class=" col-lg-6" type="text" name="PensionRet1" id="PensionRet1" pattern="[0-9,. ]{1,}" />
                                    <br><br>
                                    <label for="PensionAli1">Pensions Alimentaires Perçues (€) :</label>
                                    <input class=" col-lg-6" type="text" name="PensionAli1" id="PensionAli1" pattern="[0-9,. ]{1,}" />
                                    <br><br>
                                    <label for="Salaires1">Salaires, Pensions, Rentes Nets (€) :</label>
                                    <input class=" col-lg-6" type="text" name="Salaires1" id="Salaires1" pattern="[0-9,. ]{1,}" />
                                    <br><br>
                                    <label for="AutoEntre1">Auto-Entrepreneur - PFL (€) :</label>
                                    <input class=" col-lg-6" type="text" name="AutoEntre1" id="AutoEntre1" pattern="[0-9,. ]{1,}" />
                                    <br><br>
                                    <label for="RevenusAgri1">Revenus Agricoles Imposables (€) :</label>
                                    <input class=" col-lg-6" type="text" name="RevenusAgri1" id="RevenusAgri1" pattern="[0-9,. ]{1,}" />
                                    <br><br>
                                    <label for="RevenusIndus1">Revenus Industriels et Commerciaux Professionnels Imposables (BIC) (€) :</label>
                                    <input class=" col-lg-6" type="text" name="RevenusIndus1" id="RevenusIndus1" pattern="[0-9,. ]{1,}" />
                                    <br><br>
                                    <label for="RevenusLMNP1">Revenus des LMNP Imposables (€) :</label>
                                    <input class=" col-lg-6" type="text" name="RevenusLMNP1" id="RevenusLMNP1" pattern="[0-9,. ]{1,}" />
                                    <br><br>
                                    <label for="RevenusNonCom1">Revenus Non Commerciaux Professionnels Imposables (BNC) (€) :</label>
                                    <input class=" col-lg-6" type="text" name="RevenusNonCom1" id="RevenusNonCom1" pattern="[0-9,. ]{1,}" />
                                    <br><br>
				</div>
			</div>
			<div class="col-lg-6 border ">

				<div class="text-center">
                        <br>           
                              <legend><h2>IR Acquitté en <input style="width:130px;height:34px;font-size:20;" type="date" name="dateIr2[]" id="dateIr2"></h2></legend>
                              <br>
                              
				      <label for="TotSalaire2">Totale des Salaire et Assimilés (€) :</label>
                              <input class=" col-lg-6" type="text" name="TotSalaire2" id="TotSalaire2" pattern="[0-9,. ]{1,}" />
                              <br><br>
                              <label for="PensionRet2">Pension, Retraites, Rentes (€) :</label>
                              <input class=" col-lg-6" type="text" name="PensionRet2" id="PensionRet2" pattern="[0-9,. ]{1,}" />
                              <br><br>
                              <label for="PensionAli2">Pensions Alimentaires Perçues (€) :</label>
                              <input class=" col-lg-6" type="text" name="PensionAli2" id="PensionAli2" pattern="[0-9,. ]{1,}" />
                              <br><br>
                              <label for="Salaires2">Salaires, Pensions, Rentes Nets (€) :</label>
                              <input class=" col-lg-6" type="text" name="Salaires2" id="Salaires2" pattern="[0-9,. ]{1,}" />
                              <br><br>
                              <label for="AutoEntre2">Auto-Entrepreneur - PFL (€) :</label>
                              <input class=" col-lg-6" type="text" name="AutoEntre2" id="AutoEntre2" pattern="[0-9,. ]{1,}" />
                              <br><br>
                              <label for="RevenusAgri2">Revenus Agricoles Imposables (€) :</label>
                              <input class=" col-lg-6" type="text" name="RevenusAgri2" id="RevenusAgri2" pattern="[0-9,. ]{1,}" />
                              <br><br>
                              <label for="RevenusIndus2">Revenus Industriels et Commerciaux Professionnels Imposables (BIC) (€) :</label>
                              <input class=" col-lg-6" type="text" name="RevenusIndus2" id="RevenusIndus2" pattern="[0-9,. ]{1,}" />
                              <br><br>
                              <label for="RevenusLMNP2">Revenus des LMNP Imposables (€) :</label>
                              <input class=" col-lg-6" type="text" name="RevenusLMNP2" id="RevenusLMNP2" pattern="[0-9,. ]{1,}" />
                              <br><br>
                              <label for="RevenusNonCom2">Revenus Non Commerciaux Professionnels Imposables (BNC) (€) :</label>
                              <input class=" col-lg-6" type="text" name="RevenusNonCom2" id="RevenusNonCom2" pattern="[0-9,. ]{1,}" />
                              <br><br><br>
				</div>
			</div>
		</div>
	</div>
</fieldset>

<br>


<div class="text-right">
    <div class="btn-group" role="group" aria-label="Basic example">
      
      <a class="btnR" href="liste_client.php" role="button">Retour</a>&emsp;
      <button type="submit" class="btnS" >Suivant</button>
    </div>
</div>
<br>
<br>
</form>
</body>
<!-- ############################################################################################################################# -->

</html>  