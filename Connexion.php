<?php
/*Page qui permet de s'inscrire ou de s'identifier*/
	include('model.inc.php');
	echo "<link rel='stylesheet' type='text/css' href='Connexion.css'>";
	echo "<div id='connexion_box'>";
	if(isset($_POST['Connect'])){
		echo "<title>Adventice : Connexion</title>";
		echo "<form method='post' action=''";
		echo "<p> Identifiant : </p> <input type='text' name='id'/> <br />";
		echo "<p> Mot de passe : </p> <input type='password' name='mdp' id='mdp' /> <br />";
		echo "<br /> <input type ='submit' value='Se connecter' name='connecter'";
		echo "</form>";
		$id = $_POST['id'];
		$mdp = $_POST['mdp'];
		$requete = "SELECT * FROM Users WHERE id = '$id' ";
		include("sql_connect.php");
		$connect = mysqli_query($connexion, $requete);
		mysqli_close($connexion);
	}
	else if(isset($_POST['Inscri'])){
		echo "<title>Adventice : Inscription</title>";
		echo "<form method='post' action=''";
		echo "<p> Identifiant: </p> <input type='text' name='id' /> <br />";
		echo "<p> Mot de passe: </p> <input type='password' name='mdp' /> <br />";
		echo "<p> Prénom : </p> <input type='text'  name='firstname' /> <br />";
		echo "<p> Nom : </p> <input type='text' name='lastname' /> <br />";
		echo "<p> Numéro de téléphone : </p> <input type='tel' maxlength='10' name='tel' /> <br />";
		echo "<p> Courriel: </p> <input type='email' name='email' /> <br />";
		echo "<input type ='submit' value=\"S'inscrire\" name='inscrire' />";
		echo "</form>";
		include("sql_connect.php");
		mysqli_close($connexion);
	}
	else{
		echo "<p>Erreur</p>";
	}
	echo "</div>";
?>
