<?php
	include_once 'minimal.php';
	$Query=	"SELECT MAX(`ID`) FROM `profil`";
	$Result = $Connect->query($Query);
	$Data = mysqli_fetch_array($Result);
	$ID=$Data[0]+1;
	$Nom=$_POST['Nom'];
	$Prenom=$_POST['Prenom'];
	$Admin=$_POST['Admin'];
	$login=substr($Prenom, 1);
	$login.=$Nom;
	$mdp=$Nom;
	$dateFinAdhesion=date("Y-m-d", strtotime("+1 year"));
	$QueryAdh = "INSERT INTO `adherents`(`IDCLIENT`, `NOM`, `PRENOM`, `DATEFINADHESION`) VALUES (".$ID.",'".$Nom."','".$Prenom.",'".$dateFinAdhesion."')";
	"INSERT INTO `jeux`(`IDJEU`, `NOMJEU`, `AGEMIN`, `AGEMAX`, `TYPE`, `DESCRIPTION`, `NBBOITE`, `NBDISPO`) VALUES (".$ID.",'".$Nom."',".$AgeMin.",".$AgeMax.",'".$Type."','".$Description."',".$Stock.",".$Stock.")";
	//$Result= $Connect->query($QueryAjout);
	//header("location:gestionJeux.php");
?>