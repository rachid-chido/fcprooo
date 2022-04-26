<html>
<head>
<title>Suppression</title>
</head>

<body>

<?php
  $id = $_GET['id'] ;
  echo "<center> <b> Suppression de la formation '" . $id ;
  echo "' de la Base de Données </b><br><br>" ;

  //--- Connection au SGBDR 
  $DataBase = mysqli_connect ( "localhost" , "root" , "" ) ;

  //--- Ouverture de la base de données
  mysqli_select_db ( $DataBase, "fcpro" ) ;

  //--- Préparation de la requête
  $Requete = "Delete From formation Where id='". $id ."' Limit 1;" ;
  echo "<hr>" . $Requete . "</hr>" ;
  
  //--- Exécution de la requête (fin du script possible sur erreur ...)
  $Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;

  //--- Libérer l'espace mémoire du résultat de la requête
//  mysql_free_result ( $Resultat ) ;

  //--- Déconnection de la base de données
  mysqli_close ( $DataBase ) ;  
?>
<a href='AfficherFormation.php'>Afficher</a>
</body>
</html>