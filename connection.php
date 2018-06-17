<?php
	include_once 'minimal.php';
?>
<html lang="fr">
	<body>		
		<div class = "textBox"> 
			<form method="post" action="auth.php">
				Login : <input name="Login" size="25px"/> <br /> <br />
				Mot de passe: <input type ="password" name="Pass" /><br /><br />
				<input class = buton type="submit" value="Valider" name = "valider" />
			</form>
		</div>
	</body>
</html>
<?php
	mysqli_close($Connect);
?>