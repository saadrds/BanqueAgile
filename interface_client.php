<<?php 
//session_start();
$link1 = mysqli_connect("localhost","root","","projetagil") or die
("Error " . mysqli_error($link1)); ;
//$id=$_SESSION["session_login_cl"];
// $sql="select * from compte,client where compte.id_client=client.idC and code=$id;";
$sql="select * from compte,client where compte.id_cli=1 and code=1;";
    $result=mysqli_query($link1, $sql);
      if($result) $row=mysqli_fetch_array($result);
//if(isset($_SESSION["session_login_cl"]))
 //{?>
 	<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Client</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style_interface1.css">
	<link rel="icon"  href="images/icon1.jpg">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>

<body>

<div class="wrapper">
    <div class="sidebar">
	<img src="images/user.png" width="80px" class="user">
        <h2>Client <br> <?php echo $row["nomAgence"] ?></h2>
        <ul>
      		<li><a href="modifier_cl.php" target="interface"><i class="fas fa-magic"></i>Afficher/Modifier<center>vos données</center></a></li>
      		<li><a href="rapport_cl.php" target="interface"><i class="fas fa-calendar-check"></i>Rapport Operations</a></li>
            <li><a href="virement_cl.php" target="interface"><i class="fas fa-money-check-alt"></i>Operation virement</a></li>
            <li><a href="deco_cl.php"><i class="fas fa-sign-out-alt"></i>Deconnection</a></li>
           
           
        </ul> 
    </div>
   
</div>
<div class="deff">
		
 		 <p class="utili">
 		 Bonjour <?php echo $row['civilite'].' '.strtoupper($row['nomCli']).' '.strtoupper($row['prenomCli']);?>
 		</p>
 		 <p class="bienvenu"> Bienvenue sur votre espace sécurisé  !</p>

	
</div>
<iframe  width="1135px" height="400px" src="images/reserved3.png " scrolling="auto" name="interface"></iframe>
	
</div>
</body>


