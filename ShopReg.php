<!DOCTYPE html>
<html>
<head>
	<title>Shop Registration</title>
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

      if(isset($_POST['submitbtn'])){
        $shopname=$_POST['sname'];
        $shopAdd=$_POST['sadd'];
        $shopSpc=$_POST['sspc'];
        $shopTag=$_POST['stags'];
        $image_tmp = $_FILES['image']['tmp_name'];   //it will give temp address of the file
        $image = $_FILES['image']['name'];   //it will store the name of the file

       move_uploaded_file($image_tmp, "images/$image");

        $query="INSERT INTO shop (owner_id,shop_name,shop_Add,shop_Spc,shop_Tags,shop_image) VALUES ( 1 , '{$shopname}','{$shopAdd}','{$shopSpc}','{$shopTag}','{$image}')";
        $result=mysqli_query($connect,$query);

        if(!$result){
          echo "Not Submitted" ;
        }

         

      }

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
    <a class="nav-link" href="#">Areesha</a>
  </li>
</ul>
</div>
</nav>
</div>

<div class="jumbotron" style="width: 800px; margin-top: 50px; margin-left: 280px; height: 500px;" >
  <h1 style="font-family: monospace">Shop Details</h1>
 <br>


  <form method="post" enctype="multipart/form-data">
    <div class="form-group row">
    <label for="inputName3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputName3" placeholder="Name" name="sname">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputAddress3" placeholder="Address" name="sadd">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputspc3" class="col-sm-2 col-form-label">Speciality</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputspc3" placeholder="Speciality" name="sspc">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputtag3" class="col-sm-2 col-form-label">Tags</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputtag3" placeholder="Tags" name="stags">
    </div>
  </div>
 
  <div class="form-group">
    <label >Upload Photo</label>
    <input type="file" class="form-control-file" name="image">
  </div>

  
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" name="submitbtn">Submit</button>
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