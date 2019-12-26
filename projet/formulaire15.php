<!DOCTYPE html>
<html lang="en">




<head>
<!-- ############################################################################################################################# -->

    <title>Formulaire Patrimonial Page 8</title>

<?php
include "menu.php";
include "includes/header.php";
?>


</head>

<body >
 
<main class="container col-lg-9">
<br><br><br>
<!-- ############################################################################################################################# -->
<form action="formulaire02valide.php" methode="POST">
        <fieldset>
        <div class="text-center border ">
                <legend>
                <div class="text-right">
                        <br>
                        <br>
                        <h2><span id="date_heure"></span></h2>
                        <script type="text/javascript">window.onload = date_heure('date_heure');</script>
                </div>
                <h1>VOS OBJECTIFS PATRIMONIAUX</h1></legend>
                <div class="progress-outer container col-lg-8">
                                <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-danger" style="width:87%;">
                                        </div>
                                        <div class="progress-value"><span>87</span>%</div>
                                </div>       
                        </div>
</div>
</fieldset>
<br>
<fieldset>
    <div class="container-fluid ">
            <div class="row">
                    <div class="col-lg-4 border" >
                  
                        <div class="text-center">
                            <legend><h1>EPARGNE</h1></legend>
                            <br>
                            <legend>Epargne de précaution (€) : </legend>
                            <br>
                            <legend>Epargne mensuelle pour atteindre<br>vos objectifs (€) :</legend>

                        </div>
                    
                    </div>
                    <div class="col-lg-4 border ">

                        <div class="text-center"> 
                            <legend><h1>INVESTISSEUR 1</h1></legend>          
                            <input class="col-lg-6" type="text" name="epargnePreco1" id="epargnePreco1" pattern="[0-9,. ]{1,}" /><br>
                            <input class="col-lg-6" type="text" name="objectifMois1" id="objectifMois1" pattern="[0-9,. ]{1,}" />
                        </div>

                    </div>
                    <div class="col-lg-4 border ">

                        <div class="text-center">
                            <legend><h1>INVESTISSEUR 2</h1></legend>
                            <input class="col-lg-6" type="text" name="epargnePreco2" id="epargnePreco2" pattern="[0-9,. ]{1,}"/><br>
                            <input class="col-lg-6" type="text" name="objectifMois2" id="objectifMois2" pattern="[0-9,. ]{1,}"/> 
                        </div>
                    </div>
            </div>
    </div>
</fieldset>
<br>
<fieldset>
        <div class="text-center border ">
                <legend><h1>OBJECTIFS (Indiquez vos objectifs prioritaires - en numérotant - et indiquez l'éventuel horizon de temps pours les atteindre)</h1></legend>
        </div>
</fieldset>
<br>
<fieldset>

        <div class="text-center border "><br>
<table class=" container col-lg-9">
        <thead>
                <tr style="height:50px;bottom:10px">

                        <th class="text-center" style="col-lg-1"><h2>Choix</h2></th>
                        <th class="text-center" style=" col-lg-1"><h2>Priorité</h2></th>
                        <th class="text-center" style=" col-lg-8"><h2>Objectif</h2></th>
                        <th class="text-right" style="col-lg-1 "><h2>Durée en</h2></th>
                        <th class="text-left" style=" col-lg-1"><h2>&nbsp; Année</h2></th>

                </tr>              
        </thead>
        <tbody>
                <tr>

                        <td class="text-center"><input type="checkbox" name="choix1" id="choix1" /> <label for="choix1"></label></td>
                        <td class="text-center"><select name="priorite" id="priorite"><?php $i=1;
            while($i<=14){
            ?>
            <option value="<?php echo $i; ?>">
            <?php echo $i; ?>  
            </option>
            <?php
            $i++;}
            ?></select></td>
                        <td class="text-center">Optimiser la rentabilité de ses placements</td>
                        <td class="text-right"><select name="duree" id="duree"><option value="duree"><?php $i=1;
            while($i<=50){
            ?>
            <option value="<?php echo $i; ?>">
            <?php echo $i; ?>  
            </option>
            <?php
            $i++;}
            ?></option></select></td>
                        <td class="text-left">&emsp;Ans</td>

                </tr>
                <tr>

                        <td class="text-center"><input type="checkbox" name="choix2" id="choix2" /> <label for="choix2"></label></td>
                        <td class="text-center"><select name="priorite" id="priorite"><?php $i=1;
            while($i<=14){
            ?>
            <option value="<?php echo $i; ?>">
            <?php echo $i; ?>  
            </option>
            <?php
            $i++;}
            ?></select></td>
                        <td class="text-center">Optimiser sa fiscalité</td>
                        <td class="text-right"><select name="duree" id="duree"><option value="duree"><?php $i=1;
            while($i<=50){
            ?>
            <option value="<?php echo $i; ?>">
            <?php echo $i; ?>  
            </option>
            <?php
            $i++;}
            ?></option></select></td>
                        <td class="text-left">&emsp;Ans</td>

                </tr>
                <tr>

                        <td class="text-center"><input type="checkbox" name="choix3" id="choix3" /> <label for="choix3"></label></td>
                        <td class="text-center"><select name="priorite" id="priorite"><?php $i=1;
            while($i<=14){
            ?>
            <option value="<?php echo $i; ?>">
            <?php echo $i; ?>  
            </option>
            <?php
            $i++;}
            ?></select></td>
                        <td class="text-center">Aider ses enfants</td>
                        <td class="text-right"><select name="duree" id="duree"><option value="duree"><?php $i=1;
            while($i<=50){
            ?>
            <option value="<?php echo $i; ?>">
            <?php echo $i; ?>  
            </option>
            <?php
            $i++;}
            ?></option></select></td>
                        <td class="text-left">&emsp;Ans</td>

                </tr>
                <tr>

                        <td class="text-center"><input type="checkbox" name="choix4" id="choix4" /> <label for="choix4"></label></td>
                        <td class="text-center"><select name="priorite" id="priorite"><?php $i=1;
            while($i<=14){
            ?>
            <option value="<?php echo $i; ?>">
            <?php echo $i; ?>  
            </option>
            <?php
            $i++;}
            ?></select></td>
                        <td class="text-center">Protéger le conjoint survivant</td>
                        <td class="text-right"><select name="duree" id="duree"><option value="duree"><?php $i=1;
            while($i<=50){
            ?>
            <option value="<?php echo $i; ?>">
            <?php echo $i; ?>  
            </option>
            <?php
            $i++;}
            ?></option></select></td>
                        <td class="text-left">&emsp;Ans</td>

                </tr>
                <tr>

                        <td class="text-center"><input type="checkbox" name="choix5" id="choix5" /> <label for="choix5"></label></td>
                        <td class="text-center"><select name="priorite" id="priorite"><?php $i=1;
            while($i<=14){
            ?>
            <option value="<?php echo $i; ?>">
            <?php echo $i; ?>  
            </option>
            <?php
            $i++;}
            ?></select></td>
                        <td class="text-center">Protéger ses proches</td>
                        <td class="text-right"><select name="duree" id="duree"><option value="duree"><?php $i=1;
            while($i<=50){
            ?>
            <option value="<?php echo $i; ?>">
            <?php echo $i; ?>  
            </option>
            <?php
            $i++;}
            ?></option></select></td>
                        <td class="text-left">&emsp;Ans</td>

                </tr>
                <tr>

                        <td class="text-center"><input type="checkbox" name="choix6" id="choix6" /> <label for="choix6"></label></td>
                        <td class="text-center"><select name="priorite" id="priorite"><?php $i=1;
            while($i<=14){
            ?>
            <option value="<?php echo $i; ?>">
            <?php echo $i; ?>  
            </option>
            <?php
            $i++;}
            ?></select></td>
                        <td class="text-center">Préparer sa retraite</td>
                        <td class="text-right"><select name="duree" id="duree"><option value="duree"><?php $i=1;
            while($i<=50){
            ?>
            <option value="<?php echo $i; ?>">
            <?php echo $i; ?>  
            </option>
            <?php
            $i++;}
            ?></option></select></td>
                        <td class="text-left">&emsp;Ans</td>

                </tr>
                <tr>

                        <td class="text-center"><input type="checkbox" name="choix7" id="choix7" /> <label for="choix7"></label></td>
                        <td class="text-center"><select name="priorite" id="priorite"><?php $i=1;
            while($i<=14){
            ?>
            <option value="<?php echo $i; ?>">
            <?php echo $i; ?>  
            </option>
            <?php
            $i++;}
            ?></select></td>
                        <td class="text-center">Financer un achat immobilier</td>
                        <td class="text-right"><select name="duree" id="duree"><option value="duree"><?php $i=1;
            while($i<=50){
            ?>
            <option value="<?php echo $i; ?>">
            <?php echo $i; ?>  
            </option>
            <?php
            $i++;}
            ?></option></select></td>
                        <td class="text-left">&emsp;Ans</td>

                </tr>
                <tr>

                        <td class="text-center"><input type="checkbox" name="choix8" id="choix8" /> <label for="choix8"></label></td>
                        <td class="text-center"><select name="priorite" id="priorite"><?php $i=1;
            while($i<=14){
            ?>
            <option value="<?php echo $i; ?>">
            <?php echo $i; ?>  
            </option>
            <?php
            $i++;}
            ?></select></td>
                        <td class="text-center">Préparer la transmission de son patrimoine</td>
                        <td class="text-right"><select name="duree" id="duree"><option value="duree"><?php $i=1;
            while($i<=50){
            ?>
            <option value="<?php echo $i; ?>">
            <?php echo $i; ?>  
            </option>
            <?php
            $i++;}
            ?></option></select></td>
                        <td class="text-left">&emsp;Ans</td>

                </tr>
                <tr>

                        <td class="text-center"><input type="checkbox" name="choix9" id="choix9" /> <label for="choix9"></label></td>
                        <td class="text-center"><select name="priorite" id="priorite"><?php $i=1;
            while($i<=14){
            ?>
            <option value="<?php echo $i; ?>">
            <?php echo $i; ?>  
            </option>
            <?php
            $i++;}
            ?></select></td>
                        <td class="text-center">Préparer la transmission de son entreprise</td>
                        <td class="text-right"><select name="duree" id="duree"><option value="duree"><?php $i=1;
            while($i<=50){
            ?>
            <option value="<?php echo $i; ?>">
            <?php echo $i; ?>  
            </option>
            <?php
            $i++;}
            ?></option></select></td>
                        <td class="text-left">&emsp;Ans</td>

                </tr>
                <tr>

                        <td class="text-center"><input type="checkbox" name="choix10" id="choix10" /> <label for="choix10"></label></td>
                        <td class="text-center"><select name="priorite" id="priorite"><?php $i=1;
            while($i<=14){
            ?>
            <option value="<?php echo $i; ?>">
            <?php echo $i; ?>  
            </option>
            <?php
            $i++;}
            ?></select></td>
                        <td class="text-center">Obtenir des revenus complémentaires</td>
                        <td class="text-right"><select name="duree" id="duree"><option value="duree"><?php $i=1;
            while($i<=50){
            ?>
            <option value="<?php echo $i; ?>">
            <?php echo $i; ?>  
            </option>
            <?php
            $i++;}
            ?></option></select></td>
                        <td class="text-left">&emsp;Ans</td>

                </tr>
                <tr>

                        <td class="text-center"><input type="checkbox" name="choix11" id="choix11" /> <label for="choix11"></label></td>
                        <td class="text-center"><select name="priorite" id="priorite"><?php $i=1;
            while($i<=14){
            ?>
            <option value="<?php echo $i; ?>">
            <?php echo $i; ?>  
            </option>
            <?php
            $i++;}
            ?></select></td>
                        <td class="text-center">Se constituer un patrimoine</td>
                        <td class="text-right"><select name="duree" id="duree"><option value="duree"><?php $i=1;
            while($i<=50){
            ?>
            <option value="<?php echo $i; ?>">
            <?php echo $i; ?>  
            </option>
            <?php
            $i++;}
            ?></option></select></td>
                        <td class="text-left">&emsp;Ans</td>

                </tr>
                <tr>

                        <td class="text-center"><input type="checkbox" name="choix12" id="choix12" /> <label for="choix12"></label></td>
                        <td class="text-center"><select name="priorite" id="priorite"><?php $i=1;
            while($i<=14){
            ?>
            <option value="<?php echo $i; ?>">
            <?php echo $i; ?>  
            </option>
            <?php
            $i++;}
            ?></select></td>
                        <td class="text-center">Se constituer une épargne de précaution</td>
                        <td class="text-right"><select name="duree" id="duree"><option value="duree"><?php $i=1;
            while($i<=50){
            ?>
            <option value="<?php echo $i; ?>">
            <?php echo $i; ?>  
            </option>
            <?php
            $i++;}
            ?></option></select></td>
                        <td class="text-left">&emsp;Ans</td>

                </tr>
                <tr>

                        <td class="text-center"><input type="checkbox" name="choix13" id="choix13" /> <label for="choix13"></label></td>
                        <td class="text-center"><select name="priorite" id="priorite"><?php $i=1;
            while($i<=14){
            ?>
            <option value="<?php echo $i; ?>">
            <?php echo $i; ?>  
            </option>
            <?php
            $i++;}
            ?></select></td>
                        <td class="text-center">Placer des liquidités à court therme</td>
                        <td class="text-right"><select name="duree" id="duree"><option value="duree"><?php $i=1;
            while($i<=50){
            ?>
            <option value="<?php echo $i; ?>">
            <?php echo $i; ?>  
            </option>
            <?php
            $i++;}
            ?></option></select></td>
                        <td class="text-left">&emsp;Ans</td>

                </tr>
                <tr>

                        <td class="text-center"><input type="checkbox" name="choix14" id="choix14" /> <label for="choix14"></label></td>
                        <td class="text-center"><select name="priorite" id="priorite"><?php $i=1;
            while($i<=14){
            ?>
            <option value="<?php echo $i; ?>">
            <?php echo $i; ?>  
            </option>
            <?php
            $i++;}
            ?></select></td>
                        <td class="text-center">Se prémunir contre les accidents de la vie</td>
                        <td class="text-right"><select name="duree" id="duree"><option value="duree"><?php $i=1;
            while($i<=50){
            ?>
            <option value="<?php echo $i; ?>">
            <?php echo $i; ?>  
            </option>
            <?php
            $i++;}
            ?></option></select></td>
                        <td class="text-left">&emsp;Ans</td>

                </tr>
        </tbody>    



</table>                      
        </div>
            </fieldset>
<br>







<div class="text-right">
        <div class="btn-group" role="group" aria-label="Basic example">
                <a class="btnA" href="liste_client.php" role="button">Annuler</a>&emsp;
                <a class="btnR" href="formulaire14.php" role="button">Retour</a>&emsp;
                <button class="btnS" >Valider</button>
        </div>
</div>
<br>
</form>
</body>
<!-- ############################################################################################################################# -->

</html>




