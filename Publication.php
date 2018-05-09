<?php
/*Page qui permet de publier de nouvelles annonces*/
?>

<!DOCTYPE hmtl>

  <html>
	  <head>
		  <title>Ajouter une annonce</title>
		  <meta charset="utf-8" />
	  </head>
	  <body>
		  <form method="post" action="">
			  <p>
				<input type="text" name="title" value="Titre (30 caractères maximum)" maxlength="30" />
				<br/>
			</p>
			  <select name="category">
				  <option value="animal">Animaux</option>
				  <option value="collection">Antiquités/Collection</option>
				  <option value="housewear">Electroménager</option>
				  <option value="work">Emploi/Formation</option>
				  <option value="housing">Immobilier</option>
				  <option value="home">Maison</option>
				  <option value="materials">Matériel professionnel</option>
				  <option value="beauty">Mode/Beauté</option>
				  <option value="multimedia">Multimédia</option>
				  <otpion value="hobbies">Loisirs</option>
				  <option value="services">Services</option>
				  <option value="vehicules">Véhicules</option>
			  </select>
			<p>
				<input type="text" name="description" value="Description(400 caractères maximum)" maxlength="400" />
				<br/>
			</p>
			 <p>
				<input type="submit" name="post" value="Publier"/>
			</p>
		  </form>
	  </body>
  </html>
  
  <?php
	if(isset($_POST['post']){
		$title = $_POST['title'];
		$category = $_POST['category'];
		$description = $_POST['description'];
		$requete = "INSERT INTO article VALUES ('$title','$category','$description')";
		include("sql_connect.php");
		mysqli_query($connexion, $requete);
		mysqli_close($connexion);
	}
  ?>
