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
<body>
<?php require 'connection.php';
    $myC = new myConnection();
    $monClient = $myC->findCompteById(1);
    $transactions = $myC->findTransactionsById(1);
    while ($row = $monClient -> fetch()) {
        
?>
    <h1>Bienvenue à votre Espace Client</h1>
    <h2>Votre Compte : </h2>
    <div>
        <p>RIB : <?php echo $row['Rib']; ?></p>
        <p>Solde : <?php echo $row['solde']; ?>£</p>
        <p>Date d'ouverture : <?php echo $row['date_ouvert']; }?></p>
    </div>
    <div >
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">code de transaction</th>
      <th scope="col">type</th>
      <th scope="col">Date</th>
      <th scope="col">montant</th>
      <th scope="col">motif</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $row['id_op']; ?></td>
      <td><?php echo $row['type']; ?></td>
      <td><?php echo $row['date']; ?></td>
      <td><?php echo $row['motif']; ?></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
        <ul id="trans">
            <?php while ($row = $transactions -> fetch()) { ?>
        <li>type de transaction : <?php echo $row['id_op']; ?></li>
        <li>type : <?php echo $row['type']; ?></li>
        <li>Date : <?php echo $row['date']; ?></li>
        <li>montant : <?php echo $row['montant']; ?></li>
        <li>motif : <?php echo $row['motif']; ?></li>
        <br>
        <ul>
<?php }?>
    </div>
    <br>
    <a href="index.php"><Button>Retourner vers Page d'accueil</Button></a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>
</html>