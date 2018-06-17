<?php
	include_once 'minimal.php';
	$Query=	"SELECT MAX(`IDJEU`) FROM `jeux`";
	$Result = $Connect->query($Query);
	$Data = mysqli_fetch_array($Result);
	$ID=$Data[0]+1;
	$Nom=$_POST['nom'];
	$AgeMin=$_POST['AgeMinimum'];
	$AgeMax=$_POST['AgeMaximum'];
	$Type = $_POST['choixType'];
	$Description = $_POST['Description'];
	$Stock = $_POST['nbBoite'];
	$QueryAjout = "INSERT INTO `jeux`(`IDJEU`, `NOMJEU`, `AGEMIN`, `AGEMAX`, `TYPE`, `DESCRIPTION`, `NBBOITE`, `NBDISPO`) VALUES (".$ID.",'".$Nom."',".$AgeMin.",".$AgeMax.",'".$Type."','".$Description."',".$Stock.",".$Stock.")";
	$Result= $Connect->query($QueryAjout);
	header("location:gestionJeux.php");
?>