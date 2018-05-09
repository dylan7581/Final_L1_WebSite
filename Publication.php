<?php
/*Page qui permet de publier de nouvelles annonces*/
include('model.inc.php');
?>

<!DOCTYPE hmtl>

  <html>
	  <head>
		  <title>Ajouter une annonce</title>
		  <meta charset="utf-8" />
		  <link rel="stylesheet" type="text/css" href="Publication.css">
	  </head>
	  <body>
	  	<div id="publi">
	  		<br/>
			  <form method="post" action="">
					<input type="text" name="title" placeholder="Titre (50 caractères maximum)" maxlength="50" />
					<br/>
					<br/>
					<input type="file" name="image" accept=".jpeg, .jpg, .png">
					<br/>
					<br/>
				  <select name="category">
					  <option value="animals">Animaux</option>
					  <option value="collection">Antiquités/Collection</option>
					  <option value="housewear">Electroménager</option>
					  <option value="work">Emploi/Formation</option>
					  <option value="housing">Immobilier</option>
					  <option value="home">Maison</option>
					  <option value="materials">Matériel professionnel</option>
					  <option value="beauty">Mode/Beauté</option>
					  <option value="multimedia">Multimédia</option>
					  <option value="hobbies">Loisirs</option>
					  <option value="services">Services</option>
					  <option value="vehicles">Véhicules</option>
				  </select>
				  <br/>
				  <br/>
					<textarea type="text" name="description" placeholder="Description(600 caractères maximum)" maxlength="600" cols="60" rows="12" wrap="soft"></textarea>
					<br/>
					<br/>
					<input type="submit" name="post" value="Publier"/>
			  </form>
			</div>
	  </body>
  </html>
  
  <?php
	if(isset($_POST['post'])){
		$title = $_POST['title'];
		$category = $_POST['category'];
		$description = $_POST['description'];
		$requete = "INSERT INTO article VALUES ('$title','$category','$description')";
		include("sql_connect.php");
		mysqli_query($connexion, $requete);
		mysqli_close($connexion);
	}
  ?>
