<?php
/*Page qui permet de rechercher, elle souvre lorsqu'on recherche ou lorsqu'on clique sur une des catégories*/
  session_start();
  if(isset($_SESSION["confirm"])){
    include("modelco.inc.php");
  }
  else{
    include("model.inc.php");
  } 
  $category;
  if(isset($_POST['animals'])){
    $category = "animals";
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
    $category = $_POST['searchbar'];
  } else {
    echo "Erreur : sujet de recherche non compris";
  }
  if(isset($category)){
    include("sql_connect.php");
    if($category == $_POST['searchbar']){
      $requete = "SELECT * FROM article WHERE (titre LIKE '%'$category'%') OR (description LIKE '%'$category'%')";
      $resultat = mysqli_query($connexion, $requete);
      echo mysqli_error($connexion);
      $nrows = mysqli_num_rows($resultat);
      echo "<p>$nrows résultats compatibles</p>";
      for($k = 0; $k < $nrows; $k++){
        $article = mysqli_fetch_array($resultat);
        echo "<p>$article[1]</p>";
        echo "<p>$article[2]</p>";
      }
    }
    else{
      $requete = "SELECT * FROM article WHERE categories = '$category'";
      $resultat = mysqli_query($connexion, $requete);
      echo mysqli_error($connexion);
      $nrows = mysqli_num_rows($resultat);
      echo "<p>$nrows résultats compatibles</p>";
      for($k = 0; $k < $nrows; $k++){
        $article = mysqli_fetch_array($resultat);
        echo "<p>$article[1]</p>";
      }
    }
  echo $resultat;
  mysqli_close($connexion);
  }       
?>
