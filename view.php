<!-- Page qui permet de voir un article -->
<?php
  session_start();
  if(isset($_SESSION["confirm"])){
    include("modelco.inc.php");
  }
  else{
    include("model.inc.php");
  } 
$requete = "SELECT * FROM article WHERE id = '$id'";
$connect = mysqli_query($connexion, $requete);
$info = mysqli_fetch_array($connect);
echo "<p>$info[2]</p>";
echo "<title>$info[1]</title>";
echo "<h2 id="title">$info[1]</h2>";
echo "<div id="description">";
echo "<p>$info[3]</p>";
echo "</div>";
?>
