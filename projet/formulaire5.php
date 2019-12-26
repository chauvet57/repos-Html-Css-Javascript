<!DOCTYPE html>
<html lang="en">

<head>
<!-- ############################################################################################################################# -->

    <title>Formulaire Investisseur Page 5</title>

<?php
include "menu.php";
include "includes/header.php";
?>

</head>

<body>

<main class="container col-lg-9">
<br><br><br>
<!-- ############################################################################################################################# -->

<form action="formulaire6.php" methode="POST">
        <fieldset>
        <div class="text-center border">           
                <legend>
                <div class="text-right">
                        <br>
                        <h2><span id="date_heure"></span></h2>
                        <script type="text/javascript">window.onload = date_heure('date_heure');</script>
                </div>
                <h1>VOTRE SITUATION PERSONNELLE</h1></legend>
                <div class="progress-outer container col-lg-8">
                                <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-danger" style="width:57%;">
                                        </div>
                                        <div class="progress-value"><span>57</span>%</div>
                                </div>       
                        </div>
        </div>
</fieldset>
<br>
<fieldset>
        <div class="container-fluid">
                <div class="row">
                        <div class="col-lg-6 border">
                                <div class="text-center">
                                        <br>           
                                        <legend><h2>Investisseur 1</h2></legend>
                                        <br>
                                        <legend><h2>Situation de famille</h2></legend>
                                        <br><br>

<table class="container col-lg-9">
                                        <tr height="40px">
                                        <th><input type="checkbox" name="celibataire1" id="celibataire1" /> <label for="celibataire1">Célibataire </label></th>
                                        <th><input type="checkbox" name="marie1" id="marie1" /> <label for="marie1">Marié(e)</label></th>
                                        <th><input type="checkbox" name="divorce1" id="divorce1" /> <label for="divorce1">Divorcé(e)</label></th>
                                        </tr>
                                       
                                        <tr height="40px">
                                        <th><input type="checkbox" name="unionlib1" id="unionlib1" /> <label for="unionlib1">Union libre</label></th>
                                        <th><input type="checkbox" name="pacse1" id="pacse1" /> <label for="pacse1">Pacsé(e)</label></th>
                                        <th><input type="checkbox" name="veuf1" id="veuf1" /> <label for="veuf1">Veuf(ve)</label></th>
                                        </tr>
</table>                  
                                        <br>
                                        <br>

                                        <label for="datesitu">Date (Mariage/Pacs/Divorce):</label>
                                        <input style="width:130px;height:34px;font-size:20;" type="date" name="datesitu" id="datesitu" />
                                        <br>
                                        <br>
                                                
                                        <label for="lieusitu">à:</label>
                                        <input class="container col-lg-4" type="text" name="lieusitu" id="lieusitu" pattern="[A-Za-z ]{1,}"/><br>
                                </div>
                        </div>
                        <div class="col-lg-6 border">
                                <div class="text-center">           
                                        <br>           
                                        <legend><h2>Investisseur 2</h2></legend>
                                        <br>
                                        <legend><h2>Situation de famille</h2></legend>
                                        <br><br>


<table class="container col-lg-9">
                                        <tr height="40px">
                                        <th><input type="checkbox" name="celibataire2" id="celibataire2" /> <label for="celibataire2">Célibataire </label></th>
                                        <th><input type="checkbox" name="marie2" id="marie2" /> <label for="marie2">Marié(e)</label></th>
                                        <th><input type="checkbox" name="divorce2" id="divorce2" /> <label for="divorce2">Divorcé(e)</label></th>
                                        </tr>
                                        
                                        <tr height="40px">
                                        <th><input type="checkbox" name="unionlib2" id="unionlib2" /> <label for="unionlib2">Union libre</label></th>
                                        <th><input type="checkbox" name="pacse2" id="pacse2" /> <label for="pacse2">Pacsé(e)</label></th>
                                        <th><input type="checkbox" name="veuf2" id="veuf2" /> <label for="veuf2">Veuf(ve)</label></th>
                                        </tr>
</table>                                        
                                        <br>
                                        <br>
                                

                                <label for="datesitu">Date (Mariage/Pacs/Divorce):</label>
                                <input style="width:130px;height:34px;font-size:20;" type="date" name="datesitu" id="datesitu" />
                                <br>
                                <br>
                                        
                                <label for="lieusitu">à:</label>
                                <input class="container col-lg-4" type="text" name="lieusitu" id="lieusitu" pattern="[A-Za-zÀ-ÿ ]{1,}"  /><br>
                                
                                </div>
                        </div>  
                </div>
        </div>
</fieldset>
<br>





<div class="text-right">
        <div class="btn-group" role="group" aria-label="Basic example">
                <a class="btnA" href="liste_client" role="button">Annuler</a>&emsp;
                <a class="btnR" href="formulaire4.php" role="button">Retour</a>&emsp;
                <button type="submit" class="btnS" >Suivant</button>
        </div>
</div>

</form>

</body>
<!-- ############################################################################################################################# -->

</html>