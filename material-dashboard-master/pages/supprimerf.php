<html>
<head>
<title>Suppression</title>
</head>

<body>

<?php
  
  //--- Connection au SGBDR 
  $DataBase = mysqli_connect ( "localhost" , "root" , "" ) ;
  mysqli_select_db ( $DataBase, "fcpro" ) ;
  $idp = $_GET['id'] ;
  $Requete = "Delete From formateur Where idp ='". $idp ."'" ;
  $Resultat = mysqli_query($DataBase,$Requete) or die("erreur")  ;
  header("location:material-dashboard-master/pages/tables.php");
  mysqli_close ( $DataBase ) ;  

?>

</body>
</html>