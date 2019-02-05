<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">


  <link rel="icon" type="gif/image" href="images/nearmeicon.png">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <style type="text/css">
    .rightNavMenu a{
      color: black;
    }
  </style>
</head>
<body>

<?php
include 'connection.php';
?>

<div id="nav-bar">
  <nav class="navbar navbar-light" style="background-color:#B0E0E6;">
  <!-- Navbar content -->
   <a class="navbar-brand" href="home.php">
    <img src="images/nearmeicon.png" width="30" height="30" class="d-inline-block align-top" alt="">
    Near Me
  </a>
  <div class="rightNavMenu">
  <ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link" href="home.php">Home</a>
  </li>
</ul>
</div>
</nav>
</div>

<div class="jumbotron" style="width: 600px; margin-top: 50px; margin-left: 380px; height: 400px;" >
  <h1 style="font-family: monospace">Login</h1>
 <br>
  <form>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Login</button>
    </div>
  </div>
</form>
</div>
<br><br><br>
<div class="footer" style="background-color: #B0E0E6;">
  <br>
  <div class="container">
    <h2 style="font-family: monospace;"><b>Near Me</b></h2>
    <p>This website gives a list of shops near you anytime.<br>All rights reserved <i class="far fa-copyright"></i> 2019</p>
    <br>
    <p>1234 New Delhi,<br>India.</p>
  </div>
  <br>
</div>
</body>
</html>