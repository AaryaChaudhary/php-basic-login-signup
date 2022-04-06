<?php
  $host = "127.0.0.1";
  $username = "root";
  $password = "";
  $dbName = "db_php";
  $conn = mysqli_connect($host,$username,$password,$dbName);

  if(!$conn){
    die("can not connect with database");
  }
   
?>