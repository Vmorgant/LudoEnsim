<?php
	include_once 'minimal.php';
	$Query=	"SELECT MAX(`ID`) FROM `profil`";
	$Result = $Connect->query($Query);
	$Data = mysqli_fetch_array($Result);
	$ID=$Data[0]+1;
	$Nom=strtoupper($_POST['Nom']);
	$Prenom=strtoupper($_POST['Prenom']);
	$Admin=$_POST['Admin'];
	$Login=strtolower(substr($Prenom, 0,1));
	$Login.=strtolower($Nom);
	$Mdp=$Nom;
	$DateFinAdhesion=date("Y-m-d", strtotime("+1 year"));
	$QueryAdh = "INSERT INTO `adherents`(`IDCLIENT`, `NOM`, `PRENOM`, `DATEFINADHESION`) VALUES (".$ID.",'".$Nom."','".$Prenom."','".$DateFinAdhesion."')";
	$Adh= $Connect->query($QueryAdh);
	$QueryProfil= "INSERT INTO `profil`(`LOGIN`, `MDP`, `ADMIN`, `ID`) VALUES ('".$Login."','".$Mdp."',".$Admin.",".$ID.")";
	$Profil= $Connect->query($QueryProfil);
	header("location:adherents.php");
?>