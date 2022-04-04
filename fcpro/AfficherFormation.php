<?php 

$con = mysqli_connect('localhost', 'root', '') or die("erreur ");
mysqli_select_db($con, "fcpro") or die("erreur de connexion !! ");

$req = "select * from formation";
$exec_requete = mysqli_query($con, $req) or die ("erreur");
?>

<html>
    <head>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <link rel="stylesheet" href="table.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Sample Long Headline To Change With Your Text, FC-PRO, Nous Contacter">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Accueil</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Accueil.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.6.4, nicepage.com">
    
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    





   

 <body>
  
  <div class="table_responsive">
      <table border ="1">

      <tr>
      <th>ID</th><th>FORMATION</th>  <th>PRIX</th><th>Action</th>
      </tr>
     <?php  while ($for = mysqli_fetch_array($exec_requete)){?>
        <tr>
         <td><?php echo ($for['id']) ?></td>
         <td><?php echo ($for['nom']) ?></td>
         <td><?php echo ($for['prix']) ?></td>
         <td>
            <span class="action_btn">
              <a href="formation.html">Edit</a>
              <a href="#"><i class="fa-solid fa-trash-can"></i>Remove</a>
            </span>
          </td>
       </tr>
     <?php } ?>
   </table>
  </div>
</div>


</body>
</html>