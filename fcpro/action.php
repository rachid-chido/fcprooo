<?php 
 $con = mysqli_connect('localhost', 'root', '') or die("erreur ");
 mysqli_select_db($con, "fcpro") or die("erreur de connexion !! ");
 
 session_start();
 if (isset($_POST['uname']) && isset($_POST['psw'])) {
 
     $username = mysqli_real_escape_string($con, htmlspecialchars($_POST['uname']));
     $password = mysqli_real_escape_string($con, htmlspecialchars($_POST['psw']));
 
     if ($username !== "" && $password !== "") {
         $requete = "SELECT count(*) FROM user where
               login = '" . $username . "' and password = md5('" . $password . "') ";
         $exec_requete = mysqli_query($con, $requete);
         $reponse = mysqli_fetch_array($exec_requete);
         $count = $reponse['count(*)'];
         if ($count != 0) // nom d'utilisateur et mot de passe correctes
         {
             $_SESSION['uname'] = $username;
             header('Location: index.html');
             echo "connecter";
 
         } else {
 
             echo '<script>alert("votre identifiant ou votre mot de passe est incorrect ! ")</script>';
            
         }
               //header('Location: login.html'); // utilisateur ou mot de passe incorrect
     } else {
         header('Location: login.html?erreur=2'); // utilisateur ou mot de passe vide
     }
 } else {
     header('Location: login.html');
 }
 mysqli_close($con); // fermer la connexion
 
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8>"
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>



<!---<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>--->


  <form class="modal-content animate" action="action.php" method="post">
    <div class="imgcontainer">
  
      <img src="images/avatar.png"  alt="" width="100" height="100">
    </div>

    <div class="container">
      <label for="uname"><b>Nom utilisateur</b></label>
      <input type="text" placeholder="Entrez le nom utilisateur" name="uname" required>

      <label for="psw"><b>Mot de passe </b></label>
      <input type="password" placeholder="Entrez le mot de passe" name="psw" required>
        
      <button type="submit">se connecter</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Annuler</button>
      <span class="psw"> <a href="#">Mot de passe  oublié ?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>