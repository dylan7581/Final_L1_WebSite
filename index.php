<?php
	session_start();
	if ($_SESSION['confirm'] == 1)){
  	  include("modelco.inc.php");
 	 }
 	 else{
  	  include("model.inc.php");
 	 } 
	echo "<title>Adventice - Site d'annonce français!</title>";
	echo "<h1 align='center'>Bienvenue sur le site d'annonce Adventice</h1>";
?>
