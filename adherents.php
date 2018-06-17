<?php
	include_once 'minimal.php';
?>
<html lang="fr">
	<body>
		<div class = "textBox"> 
			
			<form action="ajoutAdherent.php" method="post">
				<p>Ajouter un adhérent : </p>
					 <p>Nom : <input type="text" name="Nom" required /></p>
					 <p>Prenom : <input type="text" name="Prenom" required /></p>
					 <p>Administrateur: <select name="Admin"></p>
						<option value="0">Non</option>
						<option value="1">Oui</option>
					 </select>
					 <p><input type="submit" value="Ajouter" name = "Ajouter"></p>
					</form>
		</div>
		<div class = "textBox"> 
		<?php
			$Query = "SELECT * FROM `adherents`"; 
			$Result= $Connect->query($Query);
			echo "<table> ";
			echo"<tr><th>ID</th><th>NOM</th> <th>PRENOM</th> <th>FIN ADHESION</th></tr>";
			while ($Adh = mysqli_fetch_array($Result) ){
				echo " <tr><td>".$Adh[0]."</td><td>".$Adh[1]."</td><td>".$Adh[2]."</td><td>".$Adh[3]."</td></tr>";
			}
		?>
		</div>
	</body>
</html>
<?php
	mysqli_close($Connect);
?>