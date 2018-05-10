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
						<td><input value="Animaux" name="animals" type="submit"></td>
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
			<hr>
		</div>
	</body>
	<footer>
		
	</footer>
</html>
