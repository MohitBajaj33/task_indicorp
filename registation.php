<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 <link rel="stylesheet" href="style.css">
</head>

<body>

  <div class="header">
    <nav class = "navbar" >
      <div class="logo">
        <img src="download.jpeg" alt="">
      </div>
      <div class="menu">
        <ul>
          <li><a href="login.php">SigIn</a></li>
        </ul>
      </div>
    </nav>
  </div>
  <div class="main container">
  <form action="hendle-register.php" method="POST" enctype="multipart/form-data">

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="name" required>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputPassword1" name="email" required>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Mobile NO.</label>
    <input type="number" class="form-control" id="exampleInputPassword1"  name="mobile" required>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1"  name="password" required>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Upload</label>
    <input type="file" class="form-control" id="exampleInputPassword1"   name="file" required>
  </div>

  <div class="btn btn-primary" ><input type="submit" class="submit" name="submit" value="submit"></div>
  </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>