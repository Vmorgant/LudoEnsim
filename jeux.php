<?php
	include_once 'minimal.php';
?>
<html lang="fr">
	<div class="content">
		<div class = "textBox"> 
			<p> Entrez ici votre recherche </p>
				<form action="recherche.php" method="post">
				 <p>Nom : <input type="text" name="Name" /></p>
				  <p>Age minimum : <select name="AgeMinimum"></p>
					<option value="0">Indifférent</option>
					<option value="3">3+</option>
					<option value="7">7+</option>
					<option value="10">10+</option>
					<option value="15">15+</option>
					<option value="18">18+</option>
				 </select>
				 <p>Age maximum : <select name="AgeMaximum"></p>
					<option value="99">Indifférent</option>
					<option value="3">3+</option>
					<option value="7">7+</option>
					<option value="10">10+</option>
					<option value="15">15+</option>
					<option value="18">18+</option>
				 </select>
				 <p>Type : <select name="Type"></p>
					<option value="'%'">Indifférent</option>
					<?php
						$QueryType = "SELECT DISTINCT TYPE FROM `jeux`";
						$Type= $Connect->query($QueryType);
						while ($Data = mysqli_fetch_array($Type) ){
							$i=0;
							echo "<option value='$Data[$i]'>$Data[$i]</option>";
							$i++;
						}
					?>
				 </select>
				 <p>
					En stock : </br>
					<input type="radio" name="Stock" value="0" id="indifferent" checked /> <label for="indifferent">indifférent</label><br />
					<input type="radio" name="Stock" value="1" id="oui" /> <label for="oui">Oui</label><br />
				 </p>
				 <p><input type="submit" value="Rechercher" name = "Rechercher"></p>
				</form>
		</div>
		
		<div class = "textBox"> 
			Nos dernier jeux :
				<div id="slider">
					<figure>
						<img src="Images/timeBomb.png" alt "timeBomb">
						<img src="Images/timeBomb.png" alt>
						<img src="Images/timeBomb.png" alt>
						<img src="Images/timeBomb.png" alt>
						<img src="Images/timeBomb.png" alt>
					</figure>
				</div>
		</div>
	</div>
</html>
<?php
	mysqli_close($Connect);
?>