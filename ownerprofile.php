<?php include 'includes/header.php';?>

<?php
if(isset($_SESSION['id'])){ 
$id=$_SESSION['id'];
$query="SELECT * FROM user WHERE user_id = $id";
        $result=mysqli_query($connect,$query);

        if($result){
          $row=mysqli_fetch_assoc($result);
          $userlogin= $row['user_name'];
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

      <h2 style="font-family: monospace;"><b><?php echo $userlogin; ?></b></h2>

  <div class="row">

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

       ?>


      <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-sm-4">
             <img src='<?php echo "images/{$shop_img}" ; ?>' height="160" width="160">
          </div>
          <div class="col-sm-8">
            <h3 ><?php echo $shop_name;   ?></h3>
            <h6><?php echo $shop_desc;   ?></h6>
            <br>
            <span class="text-left"><?php echo $shop_add; ?></span>
            <div class="float-right">
             <span><?php echo $userlogin ?></span><br>
             <span>Contact : 9891950609</span>
          </div>
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