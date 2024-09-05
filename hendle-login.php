<?php
include("connection.php");
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST"){
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = "SELECT * FROM user WHERE email = '$email' and password='$password'";
  $result = mysqli_query($conn,$query);
  $data =  mysqli_fetch_array($result);



  if($data['role'] == 0){
    echo '<script> 
    alert("Login Successfully");
    </script>';
    $_SESSION['email'] = $email;
    header("location:home.php");
  }else{
    echo '<script> 
           alert("Login Successfully");
          </script>';
    $_SESSION['email'] = $email;
    header("location:desboard.php");
  }

}

?>