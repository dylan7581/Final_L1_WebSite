<?php
/*Page qui permet de s'inscrire ou de s'identifier*/ 
	if(isset($_POST['Connect']{
		include("sql_connect.php");
		echo "<form method='post' action=''";
		echo "<p>
			<label for='id'>Identifiant</label> 
			<input type='text' name='id' id='id' />
		     </p> <br />
		     <p>
			<label for='mdp'>Mot de passe</label> 
			<input type='password' name='mdp' id='mdp' />
		     </p>
		     <input type ='submit' value='Se connecter' name='connecter'";
		echo "</form>";
		$id = $_POST['id'];
		$mdp = $_POST['mdp'];
		$requete = "SELECT * FROM Users WHERE id = '$id' ";
		$connect = mysqli_query($connexion, $requete);
		mysqli_close($connexion);
	}
	else if(isset($_POST['Inscri']{
		include("sql_connect.php");
		echo "<form method='post' action=''";
		echo "<p> Identifiant: </p> <input type='text' name='id' /> <br />";
		echo "<p> Mot de passe: </p> <input type='password' name='mdp' /> <br />";
		echo "<p> Prénom : </p> <input type='text'  name='firstname' /> <br />";
		echo "<p> Nom : </p> <input type='text' name='lastname' /> <br />";
		echo "<p> Numéro de téléphone : </p> <input type='text' maxlength='10' name='tel' /> <br />";
		echo "<p> Courriel: </p> <input type='email' name='email' /> <br />";
		echo "<input type ='submit' value='S\'inscrire' name='inscrire' />";
		echo "</form>";
		mysqli_close($connexion);
	else{
		echo "<p>Erreur</p>";
	}
?>
