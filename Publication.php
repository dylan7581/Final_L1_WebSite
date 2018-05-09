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
		$description = $_POST['description'];
		$requete = "INSERT INTO article VALUES ('$title','$description')";
		include("sql_connect.php");
		mysqli_query($connexion, $requete);
		mysqli_close($connexion);
	}
  ?>
