<!-- Page qui permet de voir un article -->
<?php
  session_start();
  if(isset($_SESSION["confirm"])){
    include("modelco.inc.php");
  }
  else{
    include("model.inc.php");
  }
$title = $_GET['article'];
echo $title;
$requete = "SELECT * FROM article WHERE titre = '$title'";
$connect = mysqli_query($connexion, $requete);
echo mysqli_error($connexion);
$info = mysqli_fetch_array($connect);
echo "<p>$info[2]</p>";
echo "<title>$info[1]</title>";
echo "<h2 id='titre'>$info[1]</h2>";
echo "<p id='description'>$info[3]</p>";
?>
