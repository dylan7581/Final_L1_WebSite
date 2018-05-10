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
			<p>07/05/18 12:29:17 : Première ligne
					<br>07/05/18 12:30:27 : deuxième ligne
					<br>07/05/18 12:30:37 : troisième ligne
					<br>07/05/18 12:30:37 : quatrième ligne
					<br>07/05/18 12:57:37 : cinquième ligne
			</p>
		</div>
		<div id="categorie">
			<hr>
			<table>
				<tbody>
					<tr>
						<td><a href="Recherche.php"><input value="Animaux" name="animals" type="submit"></a></td>
						<td><a href="Recherche.php"><input value="Antiquités/Collection" name="collection" type="submit"></a></td>
						<td><a href="Recherche.php"><input value="Electroménager" name="housewear" type="submit"></a></td>
						<td><a href="Recherche.php"><input value="Emploi/Formation" name="work" type="submit"></a></td>
						<td><a href="Recherche.php"><input value="Immobilier" name="housing" type="submit"></a></td>
						<td><a href="Recherche.php"><input value="Maison" name="home" type="submit"></a></td>
						<td><a href="Recherche.php"><input value="Matériel professionnel" name="materials" type="submit"></a></td>
						<td><a href="Recherche.php"><input value="Mode/Beauté" name="beauty" type="submit"></a></td>
						<td><a href="Recherche.php"><input value="Multimédia" name="multimedia" type="submit"></a></td>
						<td><a href="Recherche.php"><input value="Loisirs" name="hobbies" type="submit"></a></td>
						<td><a href="Recherche.php"><input value="Services" name="services" type="submit"></a></td>
						<td><a href="Recherche.php"><input value="Véhicules" name="vehicles" type="submit"></a></td>
					</tr>
				</tbody>
			</table>
			<hr>
		</div>
	</body>
	<footer>
		
	</footer>
</html>
