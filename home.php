<?php
include('connection.php');
include("validation.php");

$query = "SELECT * FROM user WHERE email = '{$_SESSION['email']}'";
$result = mysqli_query($conn,$query);
$data = mysqli_fetch_array(($result));

$select_query = "SELECT * FROM tool";
$tools = mysqli_query($conn,$select_query);
// echo"<pre>";
// print_r(mysqli_fetch_array(($tool)));

// echo"<pre>";
// print_r($data);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <style>
    h1{
      margin-top:40px;
      display: flex;
      justify-content:center;
    }
    .show-tool{
      margin-top:40px;
      display: flex;
      justify-content:center;
    }
  </style>
</head>

<body>

 
<div class="header">
    <nav class = "navbar" >
      <div class="logo">
        <img src="download.jpeg" alt="">
      </div>
      <div class="menu">
        <ul>
          <li><a href="home.php">Home</a></li>
           <li><a href="logout.php">Logout</a></li>
          <li class="user_name"><?php echo $data['name'] ?></li>
        </ul>
      </div>
    </nav>
  </div>

  <h1>Welcome to admin page <?php echo $data['name'] ?></h1>

  <div class="show-tool container">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Category</th>
      <th scope="col">image</th>
      <th scope="col">Quantity</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($tools as $tool){?>
      <tr>
        <td><?php echo $tool['id']; ?></td>
        <td><?php echo $tool['title']; ?></td>
        <td><?php echo $tool['tool_category']; ?></td>
        <td><img src="tool_image/<?php echo $tool['image']; ?>" alt=""></td>
        <td><?php echo $tool['qty']; ?></td>
         <td>
        <a href="function.php?id=<?php echo $tool['id']; ?>&name=use" class="btn btn-primary">Use</a>

        <a href="function.php?id=<?php echo $tool['id']; ?>&name=return" class="btn btn-danger">Return</a></td>
      </tr>
      
      <?php }?> 
  </tbody>
</table>

  </div>

  


<script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</script>
</body>

</html>