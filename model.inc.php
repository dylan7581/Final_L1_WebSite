<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" name="viewport">
		<link rel="stylesheet" type="text/css" href="index_style.css">
	</head>
	<body>
		<div id="titre">
			<hr class="separation">
			<a href="/final_site/"><header>Adventice</header></a>
			<hr class="separation">
		</div>
		<div id="searchbar">
			<input name="research" placeholder="Que cherchez-vous..." class="research_bar" type="text">
			<input value="Go" class="research_buttom" name="searchbar" type="submit">
		</div>
		<div id="connect">
			<form method="post" action="Connexion.php">
				<input name="Inscri" value="Inscription" style="margin-right: 23px;" type="submit">
				<input name="Connect" value="Connexion" style="margin-right: 21px;" type="submit">
			</form>
		</div>
		<div id="info">
			<p>
			<?php
			include("sql_connect.php");
			$requete = "SELECT * FROM Comment_admin";
			$resultat = mysqli_query($connexion, $requete);
			echo mysqli_error($connexion);
			$nrows = mysqli_num_rows($resultat);
			for($k = 0; $k < $nrows; $k++){
				$ligne_admin = mysqli_fetch_array($resultat);
				echo "$ligne_admin[2] : $ligne_admin[1]<br>";
			}
			mysqli_close($connexion);
			?>
			</p>
		</div>
		<div id="categorie">
			<hr>
			  <form method="post" action="Recherche.php">
				<table>
					<tbody>
						<tr>
							<td><input value="Animaux" name="animaux" type="submit"></td>
							<td><input value="Antiquités/Collection" name="collection" type="submit"></td>
							<td><input value="Electroménager" name="housewear" type="submit"></td>
							<td><input value="Emploi/Formation" name="work" type="submit"></td>
							<td><input value="Immobilier" name="housing" type="submit"></td>
							<td><input value="Maison" name="home" type="submit"></td>
							<td><input value="Matériel professionnel" name="materials" type="submit"></td>
							<td><input value="Mode/Beauté" name="beauty" type="submit"></td>
							<td><input value="Multimédia" name="multimedia" type="submit"></td>
							<td><input value="Loisirs" name="hobbies" type="submit"></td>
							<td><input value="Services" name="services" type="submit"></td>
							<td><input value="Véhicules" name="vehicles" type="submit"></td>
						</tr>
					</tbody>
				</table>
			  </form>
			<hr>
		</div>
	</body>
	<footer>
		<a href="contacts.php">Nous contacter</a>
	</footer>
</html>
