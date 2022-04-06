<?php 

class DBConnection {

   public $hostName;

   public $username;

   public $password;

   public $databaseName;

   function __construct($hostName, $u, $password, $databaseName) {
     $this->hostName = $hostName;
     $this->username = $u;
     $this->password = $password;
     $this->databaseName = $databaseName;
 
   }

   function getConnection () {
    $conn = mysqli_connect($hostName, $username, $password,$databaseName);
   }
}

$dbConnection = new DBConnection("localhost", "root", "", "db_php");
$conn = $dbConnection->getConnection();

?>