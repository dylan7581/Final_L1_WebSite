<?php
/*Page qui permet de s'inscrire ou de s'identifier*/
	session_start();
	if(isset($_SESSION['confirm'])){
		include("modelco.inc.php");
		echo "<p>Erreur : utilsateur déjà connecté</p>";
		echo "<a href='index.php'>Retour à la page principale </a>";
	}
	else{
	include("model.inc.php");
	echo "<link rel='stylesheet' type='text/css' href='Connexion.css'>";
	echo "<div id='connexion_box'>";
	if(isset($_POST['Connect'])){
		echo "<title>Adventice : Connexion</title>";
		echo "<form method='post' action='Connexion.php'";
		echo "<br/> <p> Identifiant : </p> <input type='text' name='id'/> <br />";
		echo "<p> Mot de passe : </p> <input type='password' name='mdp' id='mdp' /> <br />";
		echo "<br /> <input type ='submit' value='Se connecter' name='connecter' />";
		echo "</form>";
	} else if(isset($_POST['Inscri'])){
		echo "<title>Adventice : Inscription</title>";
		echo "<form method='post' action='Connexion.php'";
		echo "<br/> <p> Identifiant: </p> <input type='text' name='id' /> <br />";
		echo "<p> Mot de passe: </p> <input type='password' name='mdp' /> <br />";
		echo "<p> Prénom: </p> <input type='text' name='firstname' /> <br />";
		echo "<p> Nom: </p> <input type='text' name='lastname' /> <br />";
		echo "<p> Numéro de téléphone: </p> <input type='tel' maxlength='10' name='tel' /> <br />";
		echo "<p> Adresse: </p> <input type='text' name='adresse' /> <br />";
		echo "<p> Ville: </p> <input type='text' name='ville' /> <br />";
		echo "<p> Courriel: </p> <input type='email' name='email' /> <br />";
		echo "<input type ='submit' value=\"S'inscrire\" name='inscrire' />";
		echo "</form>";
	} elseif(isset($_POST['inscrire'])) {
		if($_POST['id'] != addslashes($_POST['id'])){
		  echo "<title>Adventice : Erreur d'inscription</title>";
		  echo "<p>Erreur : l'identifiant contient des caractères illégaux</p>";
		}
		else{
		echo "<title>Adventice : Inscription Réussie</title>";
		echo "<p>Inscription Réussie! <a href='index.php'>Retour à la page d'accueil</a></p>";
		$id= $_POST['id'];
		$mdp= $_POST['mdp']; 
		$firstname= $_POST['firstname']; 
		$lastname= $_POST['lastname']; 
		$tel= $_POST['tel']; 
		$adresse= $_POST['adresse']; 
		$ville= $_POST['ville']; 
		$email= $_POST['email'];
		include("sql_connect.php");
		$requete = "SELECT pseudo, email FROM Users WHERE pseudo = '$id' OR email = '$email'";
		$connect = mysqli_query($connexion, $requete);
		$donnee = mysqli_fetch_array($resultat);
		if($donnee[0] == $id || $donnee[1] == $email) {
			echo "<p>Utilisateur existe déjà!</p>";
		} else {
			$requete = "INSERT INTO Users VALUES(null, '$id', '$mdp', '$firstname', '$lastname', '$tel', '$adresse', '$ville', '$email', null, null)";
			$connect = mysqli_query($connexion, $requete);
			mysqli_close($connexion);
			$_SESSION["confirm"] = 1;
			$_SESSION["username"] = $id;
		}
		}
	} elseif (isset($_POST['connecter'])) {
		$id = $_POST['id'];
		$mdp = $_POST['mdp'];
		include("sql_connect.php");
		$requete = "SELECT mdp FROM Users WHERE pseudo = '$id'";
		$connect = mysqli_query($connexion, $requete);
		$test_mdp = mysqli_fetch_array($connect);
		if($mdp == $test_mdp[0]) {
			echo "<title>Adventice : Connexion Réussie</title>";
			echo "<p>Connexion Réussie! <a href='index.php'>Retour à la page d'accueil</a></p>";
			$_SESSION["confirm"] = 1;
			$_SESSION["username"] = $id;
		} else {
			echo "<title>Adventice : Erreur de connexion</title>";
			echo "<p>Erreur de connexion <a href='index.php'>Retour à la page d'accueil</a></p>";
		}
		mysqli_close($connexion);
	 }
	 else{
		echo "<p>Erreur! <a href='index.php'>Retour à la page d'accueil</a></p>";
	 }
	 echo "</div>";
	}
?>
