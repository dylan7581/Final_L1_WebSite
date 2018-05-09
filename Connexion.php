<?php
/*Page qui permet de s'inscrire ou de s'identifier*/ 
	if(isset($_POST['Connect']{
		include("sql_connect.php");
		echo "<form method='post' action=""";
		echo "<p>
			<label for='id'>Identifiant</label> 
			<input type='text' name='id' id='id' />
		     </p>
		     <p>
			<label for='mdp'>Mot de passe</label> 
			<input type='password' name='mdp' id='mdp' />
		     </p>";
		echo "</form>";
		$id = $_POST['id'];
		$mdp = $_POST['mdp'];
		$requete = "SELECT * FROM Users WHERE id = '$id' ";
		$connect = mysqli_query($connexion, $requete);
		mysqli_close($connexion);
	}
	else if(isset($_POST['Inscri']{
		include("sql_connect.php");
		echo "";
		mysqli_close($connexion);
	else{
		echo "<p>Erreur</p>";
	}
?>
