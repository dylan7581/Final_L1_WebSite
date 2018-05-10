<?php
/*Page qui permet de rechercher, elle souvre lorsqu'on recherche ou lorsqu'on clique sur une des catégories*/
  session_start();
  if (isset($_SESSION['connect']){
    include("modelco.inc.php");
  }
  else{
    include("model.inc.php");
  } 
  $category;
  if(isset($_SESSION['animals']){
    $category = $_SESSION['animals'];
  }
  else if(isset($_SESSION['collection']){
    $category = $_SESSION['collection'];
  }
  else if(isset($_SESSION['housewear']){
    $category = $_SESSION['housewear'];
  }
  else if(isset($_SESSION['work']){
    $category = $_SESSION['work'];
  }
  else if(isset($_SESSION['housing']){
    $category = $_SESSION['housing'];
  }
  else if(isset($_SESSION['home']){
    $category = $_SESSION['home'];
  }
  else if(isset($_SESSION['materials']){
    $category = $_SESSION['materials'];
  }
  else if(isset($_SESSION['beauty']){
    $category = $_SESSION['beauty'];
  }
  else if(isset($_SESSION['multimedia']){
    $category = $_SESSION['multimedia'];
  }
  else if(isset($_SESSION['hobbies']){
    $category = $_SESSION['hobbies'];
  }
  else if(isset($_SESSION['services']){
    $category = $_SESSION['services'];
  }
  else if(isset($_SESSION['vehicles']){
    $category = $_SESSION['vehicles'];
  }
  else if(isset($_SESSION['searchbar']){
    $category = $_SESSION['searchbar']);
  } else {
    echo "erreur";
  }
  if(isset($category)){
    include("sql_connect.php");
    if($category == $_POST['searchbar']){
      $requete = "SELECT * FROM article WHERE id LIKE '%$category%'";
      mysqli_query($connexion, $requete);
      $requete = "SELECT * FROM article WHERE titre = '$category'";
      mysqli_query($connexion, $requete);
      $requete = "SELECT * FROM article WHERE categories LIKE '%$category%'";
      mysqli_query($connexion, $requete);
      $requete = "SELECT * FROM article WHERE description LIKE '%$category%'";
      mysqli_query($connexion, $requete);
      $requete = "SELECT * FROM article WHERE commentaire LIKE '%$category%'";
      mysqli_query($connexion, $requete);
    }
    else{
      $requete = "SELECT * FROM article WHERE categories = $category";
      mysqli_query($connexion, $requete);
    }
    mysqli_close($connexion);
  }       
?>
