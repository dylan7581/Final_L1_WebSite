<?php
/*Page qui permet de se déconnecter*/
	session_start();
	include("modelco.inc.php");
	include('model.inc.php');
	if(isset($_POST['disconnect']){
		include("model.inc.php");
	}else{
		echo "<p> Erreur : déconnexion impossible </p>";
	}
?>
