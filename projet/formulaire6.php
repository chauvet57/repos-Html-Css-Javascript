<!DOCTYPE html>
<html lang="en">

<head>
<!-- ############################################################################################################################# -->

    <title>Formulaire Investisseur Page 6</title>

<?php
include "menu.php";
include "includes/header.php";
?>

</head>

<body>

<main class="container col-lg-9">
<br><br><br>
<!-- ############################################################################################################################# -->

<form action="formulaire7.php" methode="POST">
	<fieldset>
	<div class="text-center border ">           
		<legend>
		<div class="text-right">
			<br>
                        <h2><span id="date_heure"></span></h2>
                        <script type="text/javascript">window.onload = date_heure('date_heure');</script>
                </div>
		<h1>VOTRE SITUATION PERSONNELLE</h1></legend>
		<div class="progress-outer container col-lg-8">
                                <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-danger" style="width:71%;">
                                        </div>
                                        <div class="progress-value"><span>71</span>%</div>
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
					<legend><h2>Investisseur 1</h2></legend>
					<br>
					<legend ><h2>Personnes rattachées</h2></legend>
					<br>
				</div>
			</div>
			<div class="col-lg-6 border ">

				<div class="text-center">           
				<br>           
					<legend><h2>Investisseur 2</h2></legend>
					<br>
					<legend ><h2>Personnes rattachées</h2></legend>
					<br>
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
				<br>
				<legend class="text-center"><h2>Enfant(s):</h2></legend>
				<br>

				<table  id="enfant1">
					<tr>
						<td class="text-center">Nom</td>
						<td class="text-center">Prenom</td>
						<td class="text-center">Date de Naissance</td>
						<td class="text-center">A Charge </td>
						<td class="text-center">Particularités</td>
					</tr>
				</table>
				<input name="clic1" class="btnWa " type="button" onClick="AddRow1()" value="Ajouter un Enfant">
				<br><br>           
			</div>

			<div class="col-lg-6 border ">
				<br>
				<legend class="text-center"><h2>Enfant(s):</h2></legend>
				<br>

					<table  id="enfant2">
						<tr>
						<td class="text-center">Nom</td>
						<td class="text-center">Prenom</td>
						<td class="text-center">Date de Naissance</td>
						<td class="text-center">A Charge </td>
						<td class="text-center">Particularités</td>
						</tr>
					</table>
				<input name="clic1" class="btnWa" type="button" onClick="AddRow2()" value="Ajouter un Enfant"> 
				<br><br>           
			</div>
			</div>
	</div>
</fieldset>
<br>
<!-- ##autre################################################################################################################### -->
<fieldset>
	<div class="container-fluid" >
		<div class="row">
			<div class="col-lg-6 border ">
				
				<br>
				<legend class="text-center"><h2>Autre(s):</h2></legend>
				<br>
				<table  id="autre1">
					<tr>
						<td class="text-center">Nom</td>
						<td class="text-center">Prenom</td>
						<td class="text-center">Date de Naissance</td>
						<td class="text-center">A Charge </td>
						<td class="text-center">Particularités</td>
					</tr>
				</table>
				<input name="clic1" class="btnWa" type="button" onClick="AddRow3()" value="Ajouter une Personne">
				<br><br>           
			
			</div>

			<div class="col-lg-6 border ">
				<br>
				<legend class="text-center"><h2>Autre(s):</h2></legend>
				<br>
				<table  id="autre2">
					<tr>
						<td class="text-center">Nom</td>
						<td class="text-center">Prenom</td>
						<td class="text-center">Date de Naissance</td>
						<td class="text-center">A Charge </td>
						<td class="text-center">Particularités</td>
					</tr>
				</table>
				<input name="clic1" class="btnWa" type="button" onClick="AddRow4()" value="Ajouter une Personne"> 
				<br><br>           
			</div>
		</div>
	</div>
</fieldset>
<br>
<fieldset>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 border ">
				<div class="text-center"> 
				<br>				
					<legend class="text-center"><h2>Particularité</h2>
					<br>
					(petits-enfants,adoption,invalidité,départ du foyer fiscal...)</legend>
					<br>
					<textarea name="particularite" rows=2 cols=60>Saisir votre Texte</textarea>
				</div>	
				<br>
			</div>
			<div class="col-lg-6 border ">
				<div class="text-center">
				<br>
					<legend class="text-center"><h2>Particularité</h2>
					<br>
					(petits-enfants,adoption,invalidité,départ du foyer fiscal...)</legend>
					<br>
					<textarea name="particularite" rows=2 cols=60>Saisir votre Texte</textarea>
				</div>	            
			</div>
		</div>
	</div>
</fieldset>
<br>



<div class="text-right">
	<div class="btn-group" role="group" aria-label="Basic example">
		<a class="btnA" href="liste_client.php" role="button">Annuler</a>&emsp;
		<a class="btnR" href="formulaire5.php" role="button">Retour</a>&emsp;
		<button type="submit" class="btnS" >Suivant</button>
	</div>
</div>
</form>
<br>

</body>
<!-- ############################################################################################################################# -->

</html>      

<!-- ##enfant################################################################################################################ -->
<script>

function AddRow1(){
    var numero=0;
	numero++;
	// Titre
	var newRow = document.getElementById('enfant1').insertRow(-1);
 
	//
	var newCell = newRow.insertCell(0);
	newCell.align = 'center';
	newCell.innerHTML = '<td><input style="width:140px;margin-left:10px;" type="text" name="nom[]" pattern="[A-Za-zÀ-ÿ ]{1,}"></td>';
	//
	var newCell = newRow.insertCell(1);
	newCell.align = 'center';
	newCell.innerHTML = '<td><input style="width:140px" type="text" name="prenom[]" pattern="[A-Za-zÀ-ÿ ]{1,}"></td>';
	//
	var newCell = newRow.insertCell(2);
	newCell.align = 'center';
	newCell.innerHTML = '<td><input style="width:130px;height:34px;font-size:20;" type="date" name="datenaissance[]" id="datenaissance"></td>';
	//
	var newCell = newRow.insertCell(3);
	newCell.align = 'center';
	newCell.innerHTML = '<td class="text-center"><input type="checkbox" name="charge1" id="charge1" /> <label for="charge1"></label></td>';
	//
	var newCell = newRow.insertCell(4);
	newCell.align = 'center';
	newCell.innerHTML = '<td><input style="width:130px" type="text" name="particularite[]" pattern="[A-Za-zÀ-ÿ ,.]{1,}"></td>';
	//
	var newCell = newRow.insertCell(5);
	newCell.align = 'center';
	newCell.innerHTML = '<input type="button" style="margin-left:10px;" class="btnAn" onclick="deleteCurrentRow(this)" value="✘" alt="Delete" >';
}
function deleteCurrentRow(obj)
{
	var delRow = obj.parentNode.parentNode;
	var tbl = delRow.parentNode;
 
	if(tbl.getElementsByTagName('tr').length==1){
		alert('Vous ne pouvez pas supprimer cette ligne');return false ;
	}
	tbl.removeChild(delRow);
}
 
 
AddRow1();
 
</script>

<script>

function AddRow2(){
    var numero=0;
	numero++;
	// Titre
	var newRow = document.getElementById('enfant2').insertRow(-1);
 
	//
	var newCell = newRow.insertCell(0);
	newCell.align = 'center';
	newCell.innerHTML = '<td><input style="width:140px;margin-left:10px;" type="text" name="nom[]" pattern="[A-Za-zÀ-ÿ ]{1,}"></td>';
	//
	var newCell = newRow.insertCell(1);
	newCell.align = 'center';
	newCell.innerHTML = '<td><input style="width:140px" type="text" name="prenom[]" pattern="[A-Za-zÀ-ÿ ]{1,}"></td>';
	//
	var newCell = newRow.insertCell(2);
	newCell.align = 'center';
	newCell.innerHTML = '<td><input style="width:130px;height:34px;font-size:20;" type="date" name="datenaissance[]" id="datenaissance"></td>';
	//
	var newCell = newRow.insertCell(3);
	newCell.align = 'center';
	newCell.innerHTML = '<td><input type="checkbox" name="charge2" id="charge2" /> <label for="charge2"></label></td>';
	//
	var newCell = newRow.insertCell(4);
	newCell.align = 'center';
	newCell.innerHTML = '<td><input style="width:130px" type="text" name="particularite[]" pattern="[A-Za-zÀ-ÿ ,.]{1,}"></td>';
	//
	var newCell = newRow.insertCell(5);
	newCell.align = 'center';
	newCell.innerHTML = '<input type="button" style="margin-left:10px;" class="btnAn" onclick="deleteCurrentRow(this)" value="✘" alt="Delete" >';
}
function deleteCurrentRow(obj)
{
	var delRow = obj.parentNode.parentNode;
	var tbl = delRow.parentNode;
 
	if(tbl.getElementsByTagName('tr').length==1){
		alert('Vous ne pouvez pas supprimer cette ligne');return false ;
	}
	tbl.removeChild(delRow);
}
 
 
AddRow2();
 
</script>
<!-- ##autre################################################################################################################### -->
<script>

function AddRow3(){
    var numero=0;
	numero++;
	// Titre
	var newRow = document.getElementById('autre1').insertRow(-1);
 
	//
	var newCell = newRow.insertCell(0);
	newCell.align = 'center';
	newCell.innerHTML = '<td><input style="width:140px;margin-left:10px;" type="text" name="nom[]" pattern="[A-Za-zÀ-ÿ ]{1,}"></td>';
	//
	var newCell = newRow.insertCell(1);
	newCell.align = 'center';
	newCell.innerHTML = '<td><input style="width:140px" type="text" name="prenom[]" pattern="[A-Za-zÀ-ÿ ]{1,}"></td>';
	//
	var newCell = newRow.insertCell(2);
	newCell.align = 'center';
	newCell.innerHTML = '<td><input style="width:130px;height:34px;font-size:20;" type="date" name="datenaissance[]" id="datenaissance"></td>';
	//
	var newCell = newRow.insertCell(3);
	newCell.align = 'center';
	newCell.innerHTML = '<td class="text-center"><input type="checkbox" name="charge3" id="charge3" /> <label for="charge3"></label></td>';
	//
	var newCell = newRow.insertCell(4);
	newCell.align = 'center';
	newCell.innerHTML = '<td><input style="width:130px" type="text" name="particularite[]" pattern="[A-Za-zÀ-ÿ ,.]{1,}"></td>';
	//
	var newCell = newRow.insertCell(5);
	newCell.align = 'center';
	newCell.innerHTML = '<input type="button" style="margin-left:10px;" class="btnAn" onclick="deleteCurrentRow(this)" value="✘" alt="Delete" >';
}
function deleteCurrentRow(obj)
{
	var delRow = obj.parentNode.parentNode;
	var tbl = delRow.parentNode;
 
	if(tbl.getElementsByTagName('tr').length==1){
		alert('Vous ne pouvez pas supprimer cette ligne');return false ;
	}
	tbl.removeChild(delRow);
}
 
 
AddRow3();
 
</script>
<script>

function AddRow4(){
    var numero=0;
	numero++;
	// Titre
	var newRow = document.getElementById('autre2').insertRow(-1);
 
	//
	var newCell = newRow.insertCell(0);
	newCell.align = 'center';
	newCell.innerHTML = '<td><input style="width:140px;margin-left:10px;" type="text" name="nom[]" pattern="[A-Za-zÀ-ÿ ]{1,}"></td>';
	//
	var newCell = newRow.insertCell(1);
	newCell.align = 'center';
	newCell.innerHTML = '<td><input style="width:140px" type="text" name="prenom[]" pattern="[A-Za-zÀ-ÿ ]{1,}"></td>';
	//
	var newCell = newRow.insertCell(2);
	newCell.align = 'center';
	newCell.innerHTML = '<td><input style="width:130px;height:34px;font-size:20;" type="date" name="datenaissance[]" id="datenaissance"></td>';
	//
	var newCell = newRow.insertCell(3);
	newCell.align = 'center';
	newCell.innerHTML = '<td class="text-center"><input type="checkbox" name="charge4" id="charge4" /> <label for="charge4"></label></td>';
	//
	var newCell = newRow.insertCell(4);
	newCell.align = 'center';
	newCell.innerHTML = '<td><input style="width:130px" type="text" name="particularite[]" pattern="[A-Za-zÀ-ÿ ,.]{1,}"></td>';
	//
	var newCell = newRow.insertCell(5);
	newCell.align = 'center';
	newCell.innerHTML = '<input type="button" style="margin-left:10px;" class="btnAn" onclick="deleteCurrentRow(this)" value="✘" alt="Delete" >';
}
function deleteCurrentRow(obj)
{
	var delRow = obj.parentNode.parentNode;
	var tbl = delRow.parentNode;
 
	if(tbl.getElementsByTagName('tr').length==1){
		alert('Vous ne pouvez pas supprimer cette ligne');return false ;
	}
	tbl.removeChild(delRow);
}
 
 
AddRow4();
 
</script>