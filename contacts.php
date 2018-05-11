<!-- Page d'informations-->
<?php
  session_start();
  if(isset($_SESSION["confirm"])){
    include("modelco.inc.php");
  }
  else{
    include("model.inc.php");
    $_SESSION['username'] = "anonyme";
  }
  echo "<p> Dos Santos Rocha</p>";
  echo "<p> Pedro </p>";
  echo "<p'>e-mail : pedro.dos-santos-rocha@etu.univ-rouen.fr </p>";
  echo "<p> Essakhi </p>";
  echo "<p> Dylan </p>";
  echo "<p>e-mail : dylan.essakhi@etu.univ-rouen.fr </p>";
  echo "<a href='index.php'> Retour à la page d'accueil</a>";
?>
