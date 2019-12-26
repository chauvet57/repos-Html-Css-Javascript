<!DOCTYPE html>
<html lang="en">

<head>
<!-- ############################################################################################################################# -->

    <title>Formulaire Patrimonial Page 3</title>

<?php
include "menu.php";
include "includes/header.php";
?>


</head>

<body>

<main class="container col-lg-9">
<br><br><br>
<!-- ############################################################################################################################# -->
<form action="formulaire11.php" methode="POST">
        <fieldset>
      <div class="text-center border ">
        <legend>
        <div class="text-right">
                <br>
                        <h2><span id="date_heure"></span></h2>
                        <script type="text/javascript">window.onload = date_heure('date_heure');</script>
                </div>
        <h1>VOTRE SITUATION FISCALE ET PATRIMONIALE</h1></legend>
        <div class="progress-outer container col-lg-8">
                                <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-danger" style="width:25%;">
                                        </div>
                                        <div class="progress-value"><span>25</span>%</div>
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
                                        <legend><h2>Imposition</h2></legend>
                                        <br><br>                                
                                        <label for="ImpotReven1">Impôt sur le Revenu Soumis au Barème (€) :</label>
                                        <input class=" col-lg-6" type="text" name="ImpotReven1" id="ImpotReven1" pattern="[0-9,. ]{1,}" />
                                        <br><br>
                                        <label for="TotalImpot1">Total de l'Impôt sur le Revenu Net (€) :</label>
                                        <input class=" col-lg-6" type="text" name="TotalImpot1" id="TotalImpot1" pattern="[0-9,. ]{1,}" />
                                        <br><br>
                                        <label for="TauxImpot1">Taux d'Imposition (%) :</label>
                                        <input class=" col-lg-6" type="text" name="TauxImpot1" id="TauxImpot1" pattern="[0-9,. %]{1,}" />
                                        <br><br>
                                        <label for="TMI1">TMI (IR) (%) :</label>
                                        <input class=" col-lg-6" type="text" name="TMI1" id="TMI1" pattern="[0-9,. %]{1,}" />
                                        <br><br>
                                        <label for="RevenuRef1">Revenu Fiscal de Référence (€) :</label>
                                        <input class=" col-lg-6" type="text" name="RevenuRef1" id="RevenuRef1" pattern="[0-9,. ]{1,}"/>
                                        <br><br>
                                        <label for="NbrPart1">Nombre de Parts :</label>
                                        <input class=" col-lg-6" type="text" name="NbrPart1" id="NbrPart1" pattern="[0-9,. ]{1,}"/>
                                    </div>
                                <br>
                        </div>

                        <div class="col-lg-6 border ">
                                <div class="text-center">
                                        <br>
                                        <legend><h2>Imposition</h2></legend>
                                        <br><br>
                                        <label for="ImpotReven2">Impôt sur le Revenu Soumis au Barème (€) :</label>
                                        <input class=" col-lg-6" type="text" name="ImpotReven2" id="ImpotReven2" pattern="[0-9,. ]{1,}"/>
                                        <br><br>
                                        <label for="TotalImpot2">Total de l'Impôt sur le Revenu Net (€) :</label>
                                        <input class=" col-lg-6" type="text" name="TotalImpot2" id="TotalImpot2" pattern="[0-9,. %]{1,}"/>
                                        <br><br>
                                        <label for="TauxImpot2">Taux d'Imposition (%) :</label>
                                        <input class=" col-lg-6" type="text" name="TauxImpot2" id="TauxImpot2" pattern="[0-9,. %]{1,}"/>
                                        <br><br>
                                        <label for="TMI2">TMI (IR) (%) :</label>
                                        <input class=" col-lg-6" type="text" name="TMI2" id="TMI2" pattern="[0-9,. ]{1,}"/>
                                        <br><br>
                                        <label for="RevenuRef2">Revenu Fiscal de Référence (€) :</label>
                                        <input class=" col-lg-6" type="text" name="RevenuRef2" id="RevenuRef2" pattern="[0-9,. ]{1,}"/>
                                        <br><br>
                                        <label for="NbrPart2">Nombre de Parts :</label>
                                        <input class=" col-lg-6" type="text" name="NbrPart2" id="NbrPart2" pattern="[0-9,. ]{1,}"/>
                                        <br><br><br>
                                </div>
                         </div>
                </div>
        </div>
</fieldset>
<br>

<div class="text-right">
    <div class="btn-group" role="group" aria-label="Basic example">
        <a class="btnA" href="liste_client.php" role="button">Annuler</a>&emsp;
        <a class="btnR" href="formulaire9.php" role="button">Retour</a>&emsp;
        <button type="submit" class="btnS" >Suivant</button>
    </div>
</div>
<br>
</form>
</body>
<!-- ############################################################################################################################# -->

</html>  