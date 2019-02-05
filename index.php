<!DOCTYPE html>
<html>
<head>
  <title>Near Me</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

<link rel="icon" type="gif/image" href="images/nearmeicon.png">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<style type="text/css">
  
  body{
    background-image: url('images/landimage.jpeg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: top center
  }

  .social_icons{
    margin-left: 10px;
  }

</style>

</head>
<body>

<?php
include 'connection.php';

?>
<div class="container">

 
  
  <br><br>
  <div class="row">
    <div class="col-sm-4">
      <br><br>
      <h1 class="display-2 text-center" style="font-family: monospace; color: white">NEAR ME</h1>
      <br>
      <p style="color: white">Near Me website searches shops near by so that you don't have to go around searching them. It provides easy interface to search for any shop in your locality. If you are an owner, you can register your shops for other users to find it.</p>
      <br>
      <h3 style="color: white;">
        <i class="fab fa-facebook-square social_icons"></i>    
        <i class="fab fa-instagram social_icons"></i>
      </h3>
      
    </div>
  <div class="col-sm-4">
    
  </div>
  <div class="col-sm-4">
    <br><br><br><br><br>
    <a href="home.php"><button type="submit" class="btn btn-warning btn-block" style="color: white;">HOME</button></a><br>
  <a href="LoginPage.php"><button type="submit" class="btn btn-success btn-block">LOGIN IN</button></a><br>
  <a href="OwnerReg.php"><button type="submit" class="btn btn-danger btn-block">SIGN UP</button></a>
  </div>
  
  
</div>

</div>
</body>
</html>