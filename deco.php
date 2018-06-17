<?php
	session_start(); 
	session_destroy();
	echo"<script type='text/javascript' language='javascript'>
	  alert('Déconnexion effectuée')
	</script>";
	header("location:index.php");
?>

