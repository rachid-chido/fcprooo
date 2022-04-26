<html>
<head>
<title>Modifier/Saisir</title>
    <meta charset="utf-8">
</head>

<body>

<?php



  $id = $_GET['id'] ;
  $nom = $_GET['nom'] ;
  $prix = $_GET['prix'] ;
  
echo "<center> <b> Modification de la formation " . $id ;
echo " de la Base de Données </b><br><br>" ;


  $Requete = "SELECT * From formation Where id=" .$id;
echo "<hr>" . $Requete . "<hr>" ;			  
    

  $Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
  
  if ( $for = mysqli_fetch_array($Resultat) )           //0 ou 1 ligne résultat
  {
  

  
  echo"<form action='ModifierEnregistrer.php' >\n";
echo "            <input name=id type=hidden >\n";
echo " nom:       <input name=nom    type=text  ><br>\n";
echo " prix:    <input name=prix type=text   ><br>\n";
echo " <input type=submit value='Modifier' >\n";
echo "</form>\n";
  }
  else echo "Formation $id n'existe pas !\n" ;
  
  mysqli_free_result ( $Resultat ) ;
  mysqli_close ( $DataBase ) ;              //Déconnection de la BD
 ?>
<a href='AfficherFormation.php'>Afficher</a>
</body>
</html>