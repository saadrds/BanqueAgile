<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Document</title>
</head>
<style>
    body{
    margin-left : 10%;
    margin-right : 10%;
    
  }
</style>
<body>
<?php require 'connection.php';
    $myC = new myConnection();
    $monClient = $myC->findTransactionsById(1);

    while ($row = $monClient -> fetch()) {
        
?>
    <h1>Bienvenue à votre Espace Client</h1>
    <h2>Details des Transactions : </h2>
    <a href="compte.php"><Button type="button" class="btn btn-primary">Retour vers Transactions</Button></a>
    <div>
        <ul>
        <li> numero de transaction : <?php echo $row['id_op']; ?></li>
        <li>type : <?php echo $row['type']; ?></li>
        <li>Date de transaction : <?php echo $row['date']; ?></li>
        <li>montant: <?php echo $row['montant']; ?></li>
        <li>motif: <?php echo $row['motif']; ?></li>

        
        <ul>
<?php }?>
    </div>    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>
</html>
