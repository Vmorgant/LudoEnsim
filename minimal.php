<?php
	session_start(); 
	include_once 'bdd.php';
	$Connect = mysqli_connect($Server, $User, $Pwd, $DB);
	if (!$Connect)
		echo "Connexion à la base impossible";
	date_default_timezone_set('Europe/Paris');
?>
<!DOCTYPE html  >
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
		<title>Ludothèque</title>
		<link rel="stylesheet" type="text/css" href="design.css" media="all" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<div class = "banner"> 
			<img class ="logo" src="Images/logo.jpg" alt="logo de LudoEnsim" />
			<div id = "navbar">
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
			</div> 
		</div>
	</body>
</html>
	