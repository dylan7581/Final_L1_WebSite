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
    $category = $_POST['animals'];
  }
  else if(isset($_POST['collection'])){
    $category = $_POST['collection'];
  }
  else if(isset($_POST['housewear'])){
    $category = $_POST['housewear'];
  }
  else if(isset($_POST['work'])){
    $category = $_POST['work'];
  }
  else if(isset($_POST['housing'])){
    $category = $_POST['housing'];
  }
  else if(isset($_POST['home'])){
    $category = $_POST['home'];
  }
  else if(isset($_POST['materials'])){
    $category = $_POST['materials'];
  }
  else if(isset($_POST['beauty'])){
    $category = $_POST['beauty'];
  }
  else if(isset($_POST['multimedia'])){
    $category = $_POST['multimedia'];
  }
  else if(isset($_POST['hobbies'])){
    $category = $_POST['hobbies'];
  }
  else if(isset($_POST['services'])){
    $category = $_POST['services'];
  }
  else if(isset($_POST['vehicles'])){
    $category = $_POST['vehicles'];
  }
  else if(isset($_POST['searchbar'])){
    $category = $_POST['searchbar'];
  } else {
    echo "erreur";
  }
  if(isset($category)){
    include("sql_connect.php");
    if($category == $_POST['searchbar']){
      $requete = "SELECT * FROM article WHERE id LIKE '%$category%' OR titre LIKE '%$category' OR categories = '%$category' OR description LIKE '%$category%' OR commentaire LIKE '%$category'";
      $resultat = mysqli_query($connexion, $requete);
    }
    else{
      $requete = "SELECT * FROM article WHERE categories = $category";
      $resultat = mysqli_query($connexion, $requete);
    }
  echo $resultat;
  mysqli_close($connexion);
  }       
?>
