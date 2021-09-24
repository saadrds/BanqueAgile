<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php require 'connection.php';
    $myC = new myConnection();
    $monClient = $myC->findClientById(1);
    while ($row = $monClient -> fetch()) {
        
?>
    <h1>Bienvenue à votre Espace Client</h1>
    <h2>Mes informations personelles : </h2>
    <div>
        <ul>
        <li> Nom : <?php echo $row['nomCli']; ?></li>
        <li>Prénom : <?php echo $row['prenomCli']; ?></li>
        <li>Date de Naissance : <?php echo $row['date_nais']; ?></li>
        <li>Civilité: <?php echo $row['civilite']; ?></li>
        <li>Adresse Mail: <?php echo $row['email']; ?></li>
        <li>Adresse : <?php echo $row['adress']; ?></li>
        <li>tel : <?php echo $row['tel']; ?></li>
        <li>Agence : <?php echo $row['nomAgence']; ?></li>
        <ul>
<?php }?>
    </div>
</body>
</html>