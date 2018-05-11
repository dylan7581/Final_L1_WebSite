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
      $category = addslashes($category);
      $requete = "SELECT * FROM article WHERE titre LIKE '%$category%' OR categories = '$category' OR description LIKE '%$category%'";
      $resultat = mysqli_query($connexion, $requete);
      echo mysqli_error($connexion);
      $article_affiche = mysqli_fetch_array($resultat);
      echo "<p>$article_affiche[1]</p>";
    }
    else{
      $requete = "SELECT * FROM article WHERE categories = '$category'";
      $resultat = mysqli_query($connexion, $requete);
      echo mysqli_error($connexion);
      /*$article_affiche = mysqli_fetch_array($resultat);
      echo "<p>$article_affiche[1]</p>"; */
      echo "'mysqli_num_rows($resultat)' résultats compatibles";
      $k = 0;
      while (k  < mysqli_num_rows($resultat)){
        $article = mysqli_fetch_array($resultat);
        echo "<p>$article[1]</p>";
        ++$k;
      }
    }
  echo $resultat;
  mysqli_close($connexion);
  }       
?>
