<?php
	include_once 'minimal.php';
?>
<html lang="fr">
	<body>
		<div class = "textBox"> 
			<p>
			<?php
				$id=$_SESSION['ID'];
				echo "<div class = 'textBox'> Bonjour ".$_SESSION['Prenom']." ".$_SESSION['Nom'].".</div>";
				echo "</br></br> Votre carte expire le ".$_SESSION['FinAdhesion'];
			?>
			</p>
		</div>
	</body>
</html>
<?php
	mysqli_close($Connect);
?>