<!DOCTYPE html>
<html lang="fr">
<head>  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
    <br>
<div class="row">
<?php require 'connection.php';
    $myC = new myConnection();
    $monClient = $myC->getAllClients();
    $success = "danger";
    while ($row = $monClient -> fetch()) {
        if($row['solde'] > 200){
            $success = "success";
        }
        elseif($row['solde'] > 0 && $row['solde'] <= 200){
            $success = "warning";
        }
        else{
            $success = "danger";
        }
        
?>
   <br>
    
    <div class="col-xl-3 col-md-6 mb-4">
       <?php echo '<div class="card border-left-' . $success. ' shadow h-100 py-2">'; ?>
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                <div>
        <ul>
        <li><?php echo $row['civilite']. " " . $row['nomCli'] ." ". $row['prenomCli']; ?></li>
        <li>tel : <?php echo $row['tel']; ?></li>
        <li>Agence : <?php echo $row['nomAgence']; ?></li>
        <ul>

    </div>
                                    <?php echo '<div class="text-xs font-weight-bold text-' . $success . 'text-uppercase mb-1">
                                               <h5> Solde</h5> </div>'; ?>
                                    <div class="h5 mb-0 font-weight-bold text-<?php echo $success;?> -800"><?php echo $row['solde'] ;?>$</div>
                                </div>
                        <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                            </div>
                    </div>
            </div>
        </div>
        <?php }?>
    </div>
</body>
</html>