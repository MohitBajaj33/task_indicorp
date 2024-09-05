<?php
include('connection.php');


if($_GET['name'] =='use'){
  global $conn;
  $id = $_GET['id'];
  $query = "SELECT qty, use_tool from tool where id = $id";
  $result = mysqli_query($conn,$query);
  $data = mysqli_fetch_array(($result));

  $qty = $data['qty'];
  if($qty>0){
    $qty = $qty -1;
    $count = $data['use_tool'] + 1;
    $query = "UPDATE tool SET qty = $qty, use_tool=$count WHERE id=$id";
    mysqli_query($conn,$query);
    echo $query;
    echo "<script>
    alert('Use one tool!');
    </script>";

    header("location:home.php");
  }
  else{
    echo "<script>
    alert('Not Use!');
    </script>";

    header("location:home.php");
  }
  
}
else if($_GET['name'] =='return'){
  global $conn;
  $id = $_GET['id'];
  $query = "SELECT qty,use_tool from tool where id = $id";
  $result = mysqli_query($conn,$query);
  $data = mysqli_fetch_array(($result));

  $qty = $data['qty'];
  $count = $data['use_tool'];
  if($count>0){
    $qty = $qty +1;
    $count = $data['use_tool'] - 1;
    $query = "UPDATE tool SET qty = $qty, use_tool=$count WHERE id=$id";
    mysqli_query($conn,$query);
    echo $query;
    echo "<script>
    alert('Return tool');
    </script>";

    header("location:home.php");
  }
  else{
    echo "<script>
    alert('Not Return!');
    </script>";

    header("location:home.php");
  }
  
}