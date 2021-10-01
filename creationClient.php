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
  <?php
  require 'connection.php';
  $myC = new myConnection();
  $i = 0;
  $monClient = $myC->findCompteById(1);
  $transactions = $myC->findTransactionsById(1);
   ?>

<form>
  <div class="form-group">
    <label for=nom">Nom</label>
    <input type="text" class="form-control" id="nom" aria-describedby="" placeholder="Enter Nom">
  </div>
  <div class="form-group">
    <label for=nom">Prénom</label>
    <input type="text" class="form-control" id="prenom" aria-describedby="" placeholder="Enter prenom">
  </div>
  <div class="form-group">
    <label for="date">Date de naissance</label>
    <input type="date" class="form-control" id="date" aria-describedby="" placeholder="Enter date">
  </div>
  <label for="civilite">Civilité</label>
    <input type="text" class="form-control" id="civilité" aria-describedby="" placeholder="Enter civilité">
  </div>
  <label for="adresse">Adresse</label>
    <input type="text" class="form-control" id="adresse" aria-describedby="" placeholder="Enter l'adresse">
  </div>
  <label for="tel">Numéro du telephone</label>
    <input type="text" class="form-control" id="tel" aria-describedby="" placeholder="Enter numéro de teléphone">
  </div>
  <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>
</html>