<?php 

$con = mysqli_connect('localhost', 'root', '') or die("erreur ");
mysqli_select_db($con, "fcpro") or die("erreur de connexion !! ");


$nom = $_POST['nom'];
$prix = $_POST['prix'];

$req = "INSERT into formation(nom,prix) values ('$nom',$prix)";
$exec_requete = mysqli_query($con, $req) or die ("erreur");

?>