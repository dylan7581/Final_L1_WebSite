<!-- Page qui permet de voir un article -->
<?php
  session_start();
  if(isset($_SESSION["confirm"])){
    include("modelco.inc.php");
  }
  else{
    include("model.inc.php");
    $_SESSION['username'] = "anonyme";
  }
$title = $_GET['article'];
include("sql_connect.php");
$requete = "SELECT * FROM article WHERE titre = '$title'";
$connect = mysqli_query($connexion, $requete);
echo mysqli_error($connexion);
$info = mysqli_fetch_array($connect);
echo mysqli_error($connexion);
echo "<link rel='stylesheet' type='text/css' href='view.css'>";
echo "<title>$info[1]</title>";
echo "<div id='view_article'>";
echo "<p style='position:absolute;margin-top: 0px;margin-bottom: 0px;'>Catégorie : $info[2]</p>";
echo "<h2 align='center' style='margin-top: 8px;margin-bottom: 8px;'>$info[1]</h2>";
echo "<form method='post' action='Recherche.php' id='bouton_view'>";
echo "<input type='submit' name='userview' value='$info[6]' style='display:block; margin:auto;'/>";
echo "</form>";
echo "<p align='center'>$info[3]</p>";
echo "</div>";
?>
