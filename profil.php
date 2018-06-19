<?php
	include_once 'minimal.php';
?>
<html lang="fr">
	<body>
		<div class = "textBox"> 
			<?php
				$ID=$_SESSION['ID'];
				echo "<div class = 'textBox'> Bonjour ".$_SESSION['Prenom']." ".$_SESSION['Nom'].".</div>";
				echo "</br></br> Votre carte expire le ".$_SESSION['FinAdhesion'];
				echo "</br></br>Vos réservations actuelles : ";
				$QueryReservation = "SELECT `DATE`,`DATEFIN`,`NOMJEU` FROM `reservation`,`jeux`WHERE `reservation`.`IDJEU` = `jeux`.`IDJEU` AND `reservation`.`IDADHERENT` =".$ID."";
				$Result= $Connect->query($QueryReservation);
				echo "<table> ";
				echo"<tr><th>DATE</th><th>DATEFIN</th> <th>JEU</th></tr>";
				while ($Jeu = mysqli_fetch_array($Result) ){
					echo " <tr><td>".$Jeu[0]."</td><td>".$Jeu[1]."</td><td>".$Jeu[2]."</td></tr>";
				}
			?>
		</div>		
	<body>
	<?php
		mysqli_close($Connect);
	?>
	
</html>