<?php
	session_start(); 
	include_once 'bdd.php';
	$Connect = mysqli_connect($Server, $User, $Pwd, $DB);
	if (!$Connect)
		echo "Connexion à la base impossible";
?>
<!doctype html>
<head>
	<meta charset="utf-8">
	<title>Ludothèque</title>
	<link rel="stylesheet" type="text/css" href="design.css" media="all" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
	<div class = "banner"> 
		<img class ="logo" src="Images/logo.jpg" alt="logo de LudoEnsim" /></a>
		<ul id = "navbar">
			<a href="index.php"><button class = button type="button">Accueil</button></a>
			<a href="jeux.php"><button class = button type="button">Nos jeux</button></a>
			<?php
				if (empty($_SESSION['ID']))
					echo"<a href='connection.php'><button class = button type='button'>Se connecter</button></a>";
				else{
					echo"<a href='profil.php'><button class = button type='button'>Profil</button></a>";
					if($_SESSION['Admin']==1){
						echo"<a href='adherents.php'><button class = button type='button'>Gestion Adhérents</button></a>";
						echo"<a href='gestionJeux.php'><button class = button type='button'>Gestion Jeux</button></a>";
					}
					echo"<a href='deco.php'><button class = button type='button'>Se déconnecter</button></a>";
				}
			?>
		</ul> 
	</div>

	