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

 
echo"<form action='ModifierEnregistrer.php' >\n";
echo "            <input name=id type=hidden >\n";
echo " nom:       <input name=nom    type=text  ><br>\n";
echo " prix:    <input name=prix type=text   ><br>\n";
echo " <input type=submit value='Modifier' >\n";
echo "</form>\n";
</body>
</html>