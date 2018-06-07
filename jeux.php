<!doctype html>

<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Ludothèque</title>
		<link rel="stylesheet" type="text/css" href="design.css" media="all" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>

    
	<body>
	<div>
		<div class = "banner"> 
			<img class ="logo" src="Images/logo.jpg" alt="logo de LudoEnsim" /></a>
			<ul id = "navbar">
				<a href="index.php"><button class = button type="button">Accueil</button></a>
				<a href="jeux.php"><button class = button type="button">Nos jeux</button></a>
				<a href="reserver.php"><button class = button type="button">Réserver</button></a>
				<a href="connection.php"><button class = button type="button">Se connecter</button></a>
			</ul> 
		</div>
		
		<div class = "textBox"> 
			<p> Entrez ici votre recherche </p>
			<div id = "searchbar"> 
				<form action="recherche.php" method="post">
				 <p>Nom : <input type="text" name="Name" /></p>
				  <p>Age minimum : <select name="Age Minimum"></p>
					<option value="None">Indifférent</option>
					<option value="3">3+</option>
					<option value="7">7+</option>
					<option value="10">10+</option>
					<option value="15">15+</option>
					<option value="18">18+</option>
				 </select>
				 <p>Age maximum : <select name="Age Maximum"></p>
					<option value="None">Indifférent</option>
					<option value="3">3+</option>
					<option value="7">7+</option>
					<option value="10">10+</option>
					<option value="15">15+</option>
					<option value="18">18+</option>
				 </select>
				 <p>Type: <select name="Type"></p>
					<option value="None">Indifférent</option>
					<option value="3"></option>
				 </select>
				 <p><input type="submit" value="Rechercher"></p>
				</form>
			</div>
		</div>
		
		<div class = "textBox"> 
			<p> Nos dernier jeux </p>
			<!-- Slider-->
		</div>
		
		
	
		<div class = "footer"> 
			Retrouvez nous sur les réseaux sociaux !
		</div>
	</div>
	</body>
</html>
