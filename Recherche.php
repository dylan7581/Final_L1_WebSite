<?php
/*Page qui permet de rechercher, elle souvre lorsqu'on recherche, lorsqu'on clique sur une des catégories ou sur un nom d'utilisateur*/
  session_start();
  if(isset($_SESSION["confirm"])){
    include("modelco.inc.php");
  }
  else{
    include("model.inc.php");
    $_SESSION['username'] = "anonyme";
  }
  if(isset($_POST['animaux'])){
    $category = "animaux";
  }
  else if(isset($_POST['collection'])){
    $category = "colection";
  }
  else if(isset($_POST['housewear'])){
    $category = "housewear";
  }
  else if(isset($_POST['work'])){
    $category = "work";
  }
  else if(isset($_POST['housing'])){
    $category = "housing";
  }
  else if(isset($_POST['home'])){
    $category = "home";
  }
  else if(isset($_POST['materials'])){
    $category = "materials";
  }
  else if(isset($_POST['beauty'])){
    $category = "beauty";
  }
  else if(isset($_POST['multimedia'])){
    $category = "multimedia";
  }
  else if(isset($_POST['hobbies'])){
    $category = "hobbies";
  }
  else if(isset($_POST['services'])){
    $category = "services";
  }
  else if(isset($_POST['vehicles'])){
    $category = "vehicles";
  }
  else if(isset($_POST['searchbar'])){
    $category = $_POST['research'];
  }
  else if(isset($_POST['user'])){
    $user = $_POST['user'];
  }
  else if(isset($_POST['userview'])){
    $user = $_POST['userview'];
  }
  else {
    echo "Erreur : sujet de recherche non compris";
  }
  echo "<link rel='stylesheet' type='text/css' href='Recherche.css'>";
  if(isset($category)){
    if($category == $_POST['research']){
      include("sql_connect.php");
      $requete = "SELECT * FROM article WHERE titre LIKE '%$category%' OR description LIKE '%$category%'";
      $resultat = mysqli_query($connexion, $requete);
      echo mysqli_error($connexion);
      $nrows = mysqli_num_rows($resultat);
      echo "<p>$nrows résultats compatibles</p>";
      for($k = 0; $k < $nrows; $k++){
        $article = mysqli_fetch_array($resultat);
        echo "<div id='pub_article'>";
        echo "<form method='get' action='view.php'>";
        echo "<input type='submit'name='article'value=\"$article[1]\" style='float:left;'/>";
        echo "</form>";
        echo "<p style='margin-left:7%;margin-top: 9px; float:left;'>$article[2]</p>";
        echo "<form method='post' action='' style='margin-left:69%;'>";
        echo "<input type='submit'name='user'value='$article[6]'/>";
        echo "</form>";
        echo "</div>";
      }
	  mysqli_close($connexion);
    }
    else{
      include("sql_connect.php");
      $requete = "SELECT * FROM article WHERE categories = '$category'";
      $resultat = mysqli_query($connexion, $requete);
      echo mysqli_error($connexion);
      $nrows = mysqli_num_rows($resultat);
      echo "<p>$nrows résultats compatibles</p>";
      for($k = 0; $k < $nrows; $k++){
        $article = mysqli_fetch_array($resultat);
        echo "<div id='pub_article' style='width: 640px;'>";
        echo "<form method='get' action='view.php'>";
        echo "<input type='submit'name='article'value=\"$article[1]\" style='float:left;'/>";
        echo "</form>";
        echo "<p style='margin-left:7%;margin-top: 9px; float:left;'>$article[2]</p>";
        echo "<form method='post' action='' style='margin-left:69%;'>";
        echo "<input type='submit'name='user'value='$article[6]'/>";
        echo "</form>";
        echo "</div>";
     }
	 mysqli_close($connexion);
    } 
  }	else if(isset($user)){
      include("sql_connect.php");
      $requete = "SELECT * FROM article WHERE auteur = '$user'";
      $resultat = mysqli_query($connexion, $requete);
      echo mysqli_error($connexion);
      $nrows = mysqli_num_rows($resultat);
      echo "<p>$nrows annonces de \"$user\".</p>";
      for($k = 0; $k < $nrows; $k++){
        $article = mysqli_fetch_array($resultat);
        echo "<div id='pub_article' style='width: 640px;'>";
        echo "<form method='get' action='view.php'>";
        echo "<input type='submit'name='article'value=\"$article[1]\" style='float:left;/>";
        echo "</form>";
        echo "<p style='margin-left:7%;margin-top: 9px; float:left;'>$article[2]</p>";
        echo "</div>";
      }
	  mysqli_close($connexion);
    } else {
      echo "<p>Erreur : sujet non défini</p>";
    }
?>
