<html>
<head>
<title>Modifier/Enregistrer</title>
    <meta charset="utf-8">
</head>

<body>

<?php
 $DataBase = mysqli_connect ( "localhost" , "root" , "" ) ;
 mysqli_select_db ( $DataBase, "fcpro" ) ;

$id = $_GET['id'] ;
$nom = $_GET['nom'];
$prix = $_GET['prix'];

echo "Modification de $id $nom $prix<hr>" ;

 $Requete = "UPDATE formation
             SET nom = '$nom', prix = '$prix'
             WHERE formation.id = $id";
$Resultat = mysqli_query ( $DataBase, $Requete )  or  die(mysqli_error($DataBase) ) ;
 mysqli_close ( $DataBase ) ;

?>
<a href='AfficherFormation.php'>Afficher</a>


</body>
</html>