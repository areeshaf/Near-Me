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
	
	if(false){
	    echo "Hactoberfest" ;		
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
    <a class="nav-link" href="ownerprofile.php">
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

  if(isset($_GET['edit'])){
    
    $shop_id = $_GET['edit'];
    $fetch_query = "SELECT * FROM shop WHERE shop_id = '{$shop_id}' " ;
    $fetch_result = mysqli_query($connect , $fetch_query) ;
    $fetch_row = mysqli_fetch_assoc($fetch_result);

    $fetch_name = $fetch_row['shop_name'];
    $fetch_address = $fetch_row['shop_add'];
    $fetch_spc = $fetch_row['shop_spc'];
    $fetch_tags= $fetch_row['shop_tags'] ;
    $fetch_image = $fetch_row['shop_image'] ;

  }else{
    header("Location: ownerprofile.php");
  } 


   if(isset($_POST['edit'])){
        $shopname=$_POST['sname'];
        $shopAdd=$_POST['sadd'];
        $shopSpc=$_POST['sspc'];
        $shopTag=$_POST['stags'];
        $image_tmp = $_FILES['image']['tmp_name'];   //it will give temp address of the file
        $image = $_FILES['image']['name'];   //it will store the name of the file

        if(empty($image)){
          $image = $fetch_image ;
        }

       move_uploaded_file($image_tmp, "images/$image");

        $query=" UPDATE shop SET owner_id = $id ,shop_name = '$shopname' , shop_Add = '{$shopAdd}'  ,shop_Spc = '{$shopSpc}', shop_Tags = '{$shopTag}' , shop_image = '{$image}' WHERE shop_id = $shop_id ";
        $result=mysqli_query($connect,$query);
if($result){
        header('Location: ownerprofile.php');

  ?>

          
       <?php }else{?>
          <div class="alert alert-danger" role="alert" style="width: 800px; margin-top: 50px; margin-left: 280px; height: 50px;">
            Shop not Registered!!
          </div>
       <?php }}
        ?>

<div class="jumbotron" style="width: 800px; margin-top: 50px; margin-left: 280px; height: 500px;" >
  <h1 style="font-family: monospace">Edit Shop Details</h1>
 <br>


  <form method="post" enctype="multipart/form-data">
    <div class="form-group row">
    <label for="inputName3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputName3" placeholder="Name" name="sname" value="<?php echo $fetch_name ;?>">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputAddress3" placeholder="Address" name="sadd" value="<?php echo $fetch_address ;?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputspc3" class="col-sm-2 col-form-label">Speciality</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputspc3" placeholder="Speciality" name="sspc" value="<?php echo $fetch_spc ;?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputtag3" class="col-sm-2 col-form-label">Tags</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputtag3" placeholder="Tags" name="stags" value="<?php echo $fetch_tags ;?>">
    </div>
  </div>
 
  <div class="form-group">
    <label >Upload Photo</label>
    <input type="file" class="form-control-file" name="image">
    <img src="images/<?php echo $fetch_image ; ?>" class="float-right" height="50" width = "100">
  </div>

  
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" name="edit">Update</button>
    </div>
  </div>
</form>

</div>




<?php include 'includes/footer.php';?>
