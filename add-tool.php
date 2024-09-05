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
          <li><a href="desboard.php">Home</a></li>
          <li><a href="log_out.php">Logout</a></li>
        </ul>
      </div>
    </nav>
  </div>
  <div class="main container">
  <form action="hendle-tool.php" method="POST" enctype="multipart/form-data">

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Title Tool:</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="title_tool" required>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Quantity:</label>
    <input type="text" class="form-control" id="exampleInputPassword1"name="qty"  required>
  </div>

    <div class="input-filed">Category:
       <select name="select-tool" id="select-tool" class="form-select" aria-label="Default select example">
       <option value="">Select</option>
       <option value="Driver">Driver</option>
       <option value="Wrench">Wrench</option>
       <option value="Plier">Plier</option>
       <option value="Hammer">Hammer</option>
    </select></div>

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