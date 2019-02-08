<?php include 'includes/header.php' ;?>
<?php

if(isset($_SESSION['id'])){
  $id=$_SESSION['id'];
  $query="SELECT * FROM user WHERE user_id= $id";
  $result=mysqli_query($connect,$query);
  if($result){
    $row=mysqli_fetch_assoc($result);
    $userlogin=$row['user_name'];
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
    <a class="nav-link" href="#">
      <?php

      if(isset($_SESSION['id'])){
        echo $userlogin;
      }


      ?>



    </a>
  </li>
</ul>
</div>
</nav>
</div>
<?php

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
if($result){?>

          <div class="alert alert-success" role="alert" style="width: 800px; margin-top: 50px; margin-left: 280px; height: 50px;">
            Shop Registered!!
          </div>
          
       <?php }else{?>
          <div class="alert alert-danger" role="alert" style="width: 800px; margin-top: 50px; margin-left: 280px; height: 50px;">
            Shop not Registered!!
          </div>
       <?php }}
        ?>

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




<?php include 'includes/footer.php';?>