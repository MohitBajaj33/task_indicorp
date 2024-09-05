<?php

$host = "localhost";
$port = 3308;
$driver = $host.':'.$port;
$username = "root";
$password = "";
$dbName = "test";

try{
  $conn = mysqli_connect($driver,$username,$password,$dbName);
  
  if($conn){
    // echo "Database connect seccesful";
  }
}
catch(Exception $e){
  echo "error";
}
?>