<html lang="fr">
	<div class="content">
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
				$res=0;
					while ($Jeu = mysqli_fetch_array($Result) ){
						$res=1;
						echo "<div class = 'textBox'> ".$Jeu[1]." </br>  de ".$Jeu[2]." à ".$Jeu[3]." ans </br> genre : ".$Jeu[4]." </br> </br> ".utf8_encode($Jeu[5])."</div> ";
						echo "<br />";
						if(!empty($_SESSION)){
							if($Jeu[7] > 0){
								echo "<form method='post' action='' >
										<input id='ID' name='ID' type='hidden' value=".$Jeu[0].">
										<input id='Stock' name='Stock' type='hidden' value=".$Jeu[7].">
										<input type='submit' name='reserver' value='Reserver'>
									  </form>";
						
								
							}
							else{
								echo "Plus de stock";
							}
							
								if($_SESSION['Admin']==1 && $Jeu[7] < $Jeu[6]) {
									echo "<form method='post' action='' >
											<input id='ID' name='ID' type='hidden' value=".$Jeu[0].">
											<input id='Stock' name='Stock' type='hidden' value=".$Jeu[7].">
											<input type='submit' name='retour' value='retour'>
										  </form>";
								}
						}
					}
				if (res==0){
					echo "votre recherche n'a renvoyé aucun résultat";
				}
			}
			if(!empty($_SESSION)){
				if (isset($_POST['reserver'])){
							print_r($_POST);
								$nb=$_POST['Stock']-1;
								$QueryStock="UPDATE `jeux` SET `NBDISPO`= $nb WHERE `IDJEU`=".$_POST['ID']."";
								echo $QueryStock;
								$ResultStock= $Connect->query($QueryStock);
								$Query=	"SELECT MAX(`ID`) FROM `reservation`";
								$Max = $Connect->query($Query);
								$Data = mysqli_fetch_array($Max);
								$ID=$Data[0]+1;
								$Date=date("Y-m-d");
								$DateFin=date("Y-m-d", strtotime("+2 weeks"));
								$QueryResa = "INSERT INTO `reservation`(`ID`, `DATE`, `IDJEU`, `IDADHERENT`, `DATEFIN`) VALUES (".$ID.",'".$Date."',".$_POST['ID'].",".$_SESSION["ID"].",'".$DateFin."')";
								$Result= $Connect->query($QueryResa);
								header("location:index.php");								
							}			
			
							if (isset($_POST['retour'])){
								$nb=$_POST['Stock']+1;
								$QueryRetour="UPDATE `jeux` SET `NBDISPO`= $nb WHERE `IDJEU`=".$_SESSION["ID"]."";
								$Result= $Connect->query($QueryRetour);
								header("location:index.php");
							}
			}
		?>
	</div>

</html>
<?php
	mysqli_close($Connect);
?>
