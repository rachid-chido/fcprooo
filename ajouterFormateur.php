<!DOCTYPE html>
<html>
<head>
	<title>Forms Registration</title>
	<meta charset="utf-8">
</head>
<body>
	<center>
	<h2>Ajout d'un formateur :</h2>
	<a href="AfficherFormateur.php"><b>Consulter</b></a><br><br>
		<b>Entrer une valeur dans la Base de donnée :</b><br>
		<form action="AddFormateur.php" method="POST" >		
			<pre>nom :  <input type="text" name="nomp"    value=""><pre>
			<pre>prenom :	<input type="text" name="prenom"   value=""><pre>
			<pre>mail :	<input type="text" name="mail"   value=""><pre>
			<input type=submit value="Ajouter" >
		</form>
	</center>
</body>
</html>