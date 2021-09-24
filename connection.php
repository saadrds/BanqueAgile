<?php
class myConnection{
    public $connection;
    function __construct() {
        $servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=projetagil", $username, $password);
  
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $this->connection = $conn;
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
    }
function connect(){
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=projetagil", $username, $password);
  $connection = $this->conn;
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

}

public function getAllClients(){
    $qry = 'select * from client;'; // Your query
    $result = $this->connection -> query($qry); // execute query
    return $result;
    while ($row = $result -> fetch()) {
    $id = $row['nomCli'];
    echo $id;
}}

public function findClientById($fname){
    $qry = 'select * from client where id_cli =' . $fname; // Your query
    $result = $this->connection -> query($qry); // execute query
    return $result;
    
}

public function findCompteById($fname){
    $qry = 'select * from compte where id_cli =' . $fname; // Your query
    $result = $this->connection -> query($qry); // execute query
    return $result;
    
}

public function findTransactionsById($fname){
    $qry = 'select * from op_espece where id_cli =' . $fname; // Your query
    $result = $this->connection -> query($qry); // execute query
    return $result;
    
}

}

?>