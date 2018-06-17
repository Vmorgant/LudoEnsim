<html lang="fr">
	<body>
		<?php
			include_once 'minimal.php';
			if(isset($_POST["Rechercher"])){
				if(empty($_POST["nom"]))
					$nom="'%'";
				else
					$nom=$_POST["nom"];
				
				$AgeMin=$_POST['AgeMinimum'];
				$AgeMax=$_POST['AgeMaximum'];
				$Type = $_POST['Type'];
				$Stock = $_POST['Stock'];
				$QueryJeux = "SELECT * FROM `jeux` WHERE `NOMJEU` LIKE $nom AND `AGEMIN`>=$AgeMin AND `AGEMAX` <= $AgeMax AND `TYPE` LIKE $Type AND `NBDISPO` >= $Stock";
				$Result= $Connect->query($QueryJeux);
				/**TODO**/
				/*if ($Result){
					echo "Votre recherche n'a renvoyé aucun résultat";
				}*/
				/*else{*/
					while ($Jeu = mysqli_fetch_array($Result) ){
						echo "<div class = 'textBox'> ".$Jeu[1]." </br>  de ".$Jeu[2]." à ".$Jeu[3]." ans </br> genre : ".$Jeu[4]." </br> </br> ".utf8_encode($Jeu[5])."</div> ";
						echo "<br />";
					}
				//}
			}
			else {
				echo "erreur";
			}
		?>
	</body>
</html>
<?php
	mysqli_close($Connect);
?>