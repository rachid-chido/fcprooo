<html>
<head>
<title></title>
</head>

<body>

<?php
  $DataBase = mysqli_connect ( "localhost" , "root" , "" ) ;
  mysqli_select_db ( $DataBase, "fcpro" ) ;
  
  $idp = $_GET['idp'];
  $Requete = "delete From formateur where (idp = $idp)" ;
  $Resultat = mysqli_query($DataBase,$Requete) or die("erreur")  ;
  header("location:tables.php");

?>
</body>
</html>