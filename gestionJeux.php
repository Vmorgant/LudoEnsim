<?php
	include_once 'minimal.php';
?>
<html lang="fr">
	<div class="content">
		<div class = "textBox"> 
				<form action="ajoutJeux.php" method="post">
				 <p>Nom : <input type="text" name="nom" required /></p>
				  <p>Age minimum : <select name="AgeMinimum"></p>
					<option value="0">0</option>
					<option value="3">3+</option>
					<option value="7">7+</option>
					<option value="10">10+</option>
					<option value="15">15+</option>
					<option value="18">18+</option>
				 </select>
				 <p>Age maximum : <select name="AgeMaximum"></p>
					<option value="99">99</option>
					<option value="3">3+</option>
					<option value="7">7+</option>
					<option value="10">10+</option>
					<option value="15">15+</option>
					<option value="18">18+</option>
					</select>
				 <p><label for="choixType">Type du jeu : </label>
					<input list="types" type="text" name="choixType" id="choixType" required></p>
					 <datalist id="types">	
							<?php
								$QueryType = "SELECT DISTINCT TYPE FROM `jeux`";
								$Type= $Connect->query($QueryType);
								while ($Data = mysqli_fetch_array($Type) ){
									$i=0;
									echo "<option value='$Data[$i]'>";
									$i++;
								}
							?>
					 </datalist>
				 <p><label for="Description">Description : </label>
					<textarea name="Description" id="Description" required></textarea>
				 </p>
				 <p>Nombre de boite <input type="number" name="nbBoite" required/></p>
				 <p><input type="submit" value="Ajouter" name = "Ajouter"></p>
				</form>
		</div>
		<div class = "textBox">
			<?php
				$QueryJeux = "SELECT `IDJEU`,`NOMJEU`,`NBBOITE`,`NBDISPO` FROM `jeux`";
				$Result= $Connect->query($QueryJeux);
				echo "<table> ";
				echo"<tr><th>ID</th><th>NOM</th> <th>NBBOITE</th> <th>NBDISPO</th></tr>";
				while ($Jeu = mysqli_fetch_array($Result) ){
					echo " <tr><td>".$Jeu[0]."</td><td>".$Jeu[1]."</td><td>".$Jeu[2]."</td><td>".$Jeu[3]."</td></tr>";
				}
			?>
		</div>
	</div>
</html>
<?php
	mysqli_close($Connect);
?>