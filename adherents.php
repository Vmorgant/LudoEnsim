<?php
	include_once 'minimal.php';
?>
<html lang="fr">
	<body>
		<div class = "textBox"> 
			<form action="ajoutAdherent.php" method="post">
					 <p>Nom : <input type="text" name="Nom" required /></p>
					 <p>Prenom : <input type="text" name="Prenom" required /></p>
					 <p>Adminitrateur: <select name="Admin"></p>
						<option value="0">Non</option>
						<option value="1">Oui</option>
					 </select>
					 <p><input type="submit" value="Ajouter" name = "Ajouter"></p>
					</form>
		</div>
	</body>
</html>
<?php
	mysqli_close($Connect);
?>