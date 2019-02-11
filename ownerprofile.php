<?php include 'includes/header.php';?>

<?php
if(isset($_SESSION['id'])){ 
$id=$_SESSION['id'];
$query="SELECT * FROM user WHERE user_id = $id";
        $result=mysqli_query($connect,$query);

        if($result){
          $row=mysqli_fetch_assoc($result);
          $userlogin= $row['user_name'];
          $user_email=$row['user_email'];
          $user_contact=$row['user_contact'];
          $user_uname=$row['user_username'];
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
  <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="home.php" style="color: black;">Home</a>
      </li>
     </ul> 
  <div class="rightNavMenu">
  <ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link" href="ownerprofile.php" style="color: black;">

      <?php 
      if (isset($_SESSION['id'])) {
        echo "$userlogin";

      }

      ?>

    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="ShopReg.php" style="color: black;">Register Shop</a>
  </li>
  <li class="nav-item">

    <a class="nav-link" href="logout.php">Logout</a>
  </li>
  

</ul>
</div>
</nav>
</div>


<div class="container">
  <br>
  
  <br>

<div class="row">
  <div  class="col-sm-4">
      <h2 style="font-family: monospace;"><b><?php echo $userlogin; ?></b></h2>
      
      <h5><?php echo $user_uname; ?></h5>
      <h6><?php echo "Email : $user_email"; ?></h6>
      <h6><?php echo "Contact : $user_contact"; ?></h6>
      <br>
      <div class="container">
        <div class="row">
          <div class="col-sm">
      <div>
      <a href="#"><button class="btn btn-info">Edit Account</button></a>
      </div>
      </div>
      <div class="col-sm">
      <div>
      <a href="deleteAcc.php"><button class="btn btn-danger">Delete Account</button></a>
      </div>
    </div>
  </div>
</div>
      <br><br>
      <div class="card border-info mb-3" style="max-width: 25rem;">
  <div class="card-header"><b>Search For Shops</b></div>
  <div class="card-body text-info">
    <h5>Search</h5>
    
      <form method="post" action="profilesearch.php">
        <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Search..." name="search_this">
  <div class="input-group-append">
    <button class="btn btn-info" type="submit" name="search"><i class="fas fa-search"></i></button>
  </div>

</div>
</form>
    
  </div>
</div>
      </div>
  

    <div class="col-sm-8">

      
<br><br>
      <?php 
      $query="SELECT * FROM shop WHERE owner_id= $id";
      $result=mysqli_query($connect,$query);
      if($result){
        while($row=mysqli_fetch_assoc($result)){
          $shop_name=$row['shop_name'];
          $shop_desc=$row['shop_spc'];
          $shop_add=$row['shop_add'];
          $shop_img=$row['shop_image'];
          $shop_id=$row['shop_id'];

       ?>


      <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-sm-4">
             <img src='<?php echo "images/{$shop_img}" ; ?>' height="160" width="160">
          </div>
          <div class="col-sm-6">
            <h3 ><?php echo $shop_name;   ?></h3>
            <h6><?php echo $shop_desc;   ?></h6>
            <br>
            <br>
            <span class="text-right"><?php echo $shop_add; ?></span>
            
          </div>
          <div class="col-sm-2">
            <a href='<?php echo "edit_shop.php?edit={$shop_id}" ;?>'><button class="btn btn-info float-right">Edit</button></a>
            <br>
            <br>
             <a href="deleteShop.php?shop_name=<?php echo $shop_name; ?>"><button type="button" class="btn btn-danger float-right">Delete</button></a>
          </div>
          
        </div>
      
      </div>
    </div>
    
    <br>
     
    <?php } 
  } 
  ?>
   
</div>
     
  </div>


</div>


<?php include 'includes/footer.php';?>