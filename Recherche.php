<?php
/*Page qui permet de rechercher, elle souvre lorsqu'on recherche ou lorsqu'on clique sur une des catégories*/
  $category;
  if(isset($_POST['animals']){
    $category = $_POST['animals'];
  }
  else if(isset($_POST['collection']){
    $category = $_POST['collection'];
  }
  else if(isset($_POST['housewear']){
    $category = $_POST['housewear'];
  }
  else if(isset($_POST['work']){
    $category = $_POST['work'];
  }
  else if(isset($_POST['housing']){
    $category = $_POST['housing'];
  }
  else if(isset($_POST['home']){
    $category = $_POST['home'];
  }
  else if(isset($_POST['materials']){
    $category = $_POST['materials'];
  }
  else if(isset($_POST['beauty']){
    $category = $_POST['beauty'];
  }
  else if(isset($_POST['multimedia']){
    $category = $_POST['multimedia'];
  }
  else if(isset($_POST['hobbies']){
    $category = $_POST['hobbies'];
  }
  else if(isset($_POST['services']){
    $category = $_POST['services'];
  }
  else if(isset($_POST['vehicles']){
    $category = $_POST['vehicles'];
  }
  else if(isset($_POST['searchbar']){
    $category = $_POST['searchbar']);
  } else {
    echo "erreur";
  }
?>
