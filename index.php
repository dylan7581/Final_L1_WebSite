<?php
/*Projet créé par Essakhi Dylan et Dos Santos Rocha Pedro
 *Page d'accueil
*/
	session_start();
	if (isset($_SESSION["confirm"])){
  	  include("modelco.inc.php");
 	 }
 	else{
  	  include("model.inc.php");
 	} 
	echo "<title>Adventice - Site d'annonce français!</title>";
	echo "<h1 align='center'>Bienvenue sur le site d'annonces, Adventice!</h1>";
?>
