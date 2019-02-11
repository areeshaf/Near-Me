<?php include 'includes/header.php';?>
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
  

    <?php
    if(isset($_SESSION['id'])){?>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="ownerprofile.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php 
      echo $userlogin;
      ?>
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="ownerprofile.php">My Profile</a>
      <a class="dropdown-item" href="logout.php">Logout</a>
      </div>
      
    </li>
    <li class="nav-item">

    <a class="nav-link" href="logout.php">Logout</a>
  </li>
    <?php
    }


else {
    ?>

    <li class="nav-item">

    <a class="nav-link" href="LoginPage.php">Login</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="OwnerReg.php">Sign Up</a>
  </li>
  <?php } ?>
</ul>
</div>
</nav>
</div>


<div class="container">
  <br>
  <?php

  if(isset($_GET['logout'])){
    if($_GET['logout']=="success"){
  ?>
<div class="alert alert-success" role="alert">
            Successfully Logged Out!
          </div>

<?php
}
}?>

<?php
if(isset($_GET['delete'])){
  if($_GET['delete']=="success"){
    ?>
    <div class="alert alert-success" role="alert">
            Account deleted successfully!
          </div>

    <?php
  }
}

?>

<br>
  <h1 class="display-4 text-center">Welcome to Near Me</h1>

  <br><br>
  

 <div class="row">

   <div class="col-sm-7">
    <?php

    $query="SELECT * FROM shop";
    $result=mysqli_query( $connect , $query);
    while ($row = mysqli_fetch_assoc($result)) {
      
      $shop_name = $row['shop_name'];
      $shop_Add= $row['shop_add'];
      $shop_Spc=$row['shop_spc'];
      $shop_image=$row['shop_image'];
      $owner_id=$row['owner_id'];
      

      $query2="SELECT * FROM user WHERE user_id=$owner_id";
      $result2=mysqli_query($connect,$query2);
      $row=mysqli_fetch_assoc($result2);
      $owner_name=$row['user_name'];
      $owner_contact=$row['user_contact'];
    ?>
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-sm-4">
             <img src='<?php echo "images/{$shop_image}" ;?>' height="160" width="160">
          </div>
          <div class="col-sm-8">
            <h3 ><?php echo $shop_name; ?></h3>
            <h6><?php echo $shop_Spc; ?></h6>
            <br>
            <span class="text-left"><?php echo $shop_Add; ?></span>
            <div class="float-right">
             <span><?php echo $owner_name ?></span><br>

             <span><?php echo "Contact : $owner_contact"; ?></span>
          </div>
          </div>
        </div>
      
      </div>
    </div>
    <br>

    <?php } ?>
    


   </div>

   <div class="col-sm-1"></div>

   <div class="col-sm-4">
     <div class="card border-info mb-3">
  <div class="card-header" ><b>Search For Shops</b></div>
  <div class="card-body text-info">
    <form method="post" action="search.php">
    <div class="form-group">
      <input type="text" class="form-control" id="Search" placeholder="Search..." name="search_this">
    </div>
   <button type="submit" class="btn btn-primary" name="search"><i class="fas fa-search"></i></button>
</form>
  </div>
</div>
   </div>
 </div>


  
</div>


<?php include 'includes/footer.php';?>