<?php
/*Page qui permet de se déconnecter*/
	session_start();
	if(isset($_POST['disconnect'])){
		include("model.inc.php");
		session_destroy();
	}else{
		include("modelco.inc.php");
		echo "<p> Erreur : déconnexion impossible </p>";
	}
?>
