<html>
<head>
  <title>	PHP - Exemple n°6	</title>
  <meta charset="utf-8">
</head>
<body>
<?php
    $nom = $_GET["nom"]; 
    $prix = $_GET["prix"];
    $idp = $_GET["idp"];
  
  //--- Connection au SGBDR 
  $DataBase = mysqli_connect ( "localhost" , "root" , "" ) ;

  //--- Ouverture de la base de données
  mysqli_select_db ( $DataBase, "fcpro" ) ;

  //--- Préparation de la requête d'insertion de données
  $Requete = "INSERT INTO formation (nom, prix, idp) VALUES ('$nom','$prix','$idp')";
  //echo "<hr>" .$Requete. "<hr>";
    
  //--- Exécution de la requête (fin du script possible sur erreur ...)
  $Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
  echo '<center>Ajout de la formation <b>'.$nom.'</b> dans la Base de Données !</center>';


  //--- Déconnection de la base de données
  mysqli_close ( $DataBase ) ;  
?>
<a href="material-dashboard-master/pages/tables.php">Consulter</a>
<hr>
</BODY>
</HTML>