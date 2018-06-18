<?php
include_once 'minimal.php';
			if(isset($_POST["valider"])){
				if(!empty($_POST["Login"])&&!empty($_POST["Pass"])){
					$login = $_POST["Login"];
					$pass = $_POST["Pass"];
					$Query = "SELECT `LOGIN`, `ADMIN`, `ID` FROM `profil` WHERE `MDP` = '".$pass."' AND `LOGIN` = '".$login."'";
					echo "<br />";
					$Result= $Connect->query($Query);
					$log=0;
					while($data = mysqli_fetch_array($Result)){
						if ($data[0] == $login){
							$log=1;
							$_SESSION["Admin"]=$data[1];
							$id=$data[2];
							$QueryAdherent="SELECT * FROM `adherents` WHERE `IDCLIENT` = '".$id."'";
							$Result= $Connect->query($QueryAdherent);
							$data = mysqli_fetch_array($Result);
							$_SESSION["ID"]=$data[0];
							$_SESSION["Nom"]=$data[1];
							$_SESSION["Prenom"]=$data[2];
							$_SESSION["FinAdhesion"]=$data[3];
							header("location:profil.php");
						}
					}
					if($log ==0)
						echo "login ou mot de passe incorrect";
				}
				else echo "Toutes les cases du formulaire ne sont pas remplies";
			}

mysqli_close($Connect);
?> 