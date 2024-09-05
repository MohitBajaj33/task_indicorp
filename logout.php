<?php
session_start();
if($_SESSION['email']){
  session_destroy();
  echo '<script> 
  alert("Login Out Successfully") ;
  </script>';
  header("location:login.php");
}