<?php
/*Page qui permet de se déconnecter*/
	session_start();
	include("modelco.inc.php");
	if(isset($_POST['disconnect'])){
		include("model.inc.php");
		$_SESSION["confirm"] = 0;
	}else{
		echo "<p> Erreur : déconnexion impossible </p>";
	}
?>