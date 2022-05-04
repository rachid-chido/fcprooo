<html>
<head>
<title>Suppression</title>
</head>

<body>

<?php
  
  //--- Connection au SGBDR 
  $DataBase = mysqli_connect ( "localhost" , "root" , "" ) ;
  mysqli_select_db ( $DataBase, "fcpro" ) ;
  $id = $_GET['id'] ;

  //--- Préparation de la requête
  $Requete = "Delete From formation Where id='". $id ."'" ;

  $Resultat = mysqli_query($DataBase,$Requete) or die("erreur")  ;
  header("location:material-dashboard-master/pages/tables.php");
  mysqli_close ( $DataBase ) ;  

  $DataBase = mysqli_connect ( "localhost" , "root" , "" ) ;
  mysqli_select_db ( $DataBase, "fcpro" ) ;
  $id = $_GET['idp'] ;

  $Requete = "Delete From formateur Where id='". $id ."'" ;
  $Resultat = mysqli_query($DataBase,$Requete) or die("erreur")  ;
  header("location:material-dashboard-master/pages/tables.php");
  mysqli_close ( $DataBase ) ;  
?>

</body>
</html>