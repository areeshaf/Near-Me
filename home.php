<?php include 'includes/header.php';?>

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
    <a class="nav-link" href="LoginPage.php">Login</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="OwnerReg.php">Sign Up</a>
  </li>
</ul>
</div>
</nav>
</div>


<div class="container">

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
      $shop_image=$row['shop_image']
      

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
             <span>Mr. ABCD</span><br>
             <span>Contact : 9891950609</span>
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
    <form>
  <div class="form-group">
    <input type="text" class="form-control" id="Search" placeholder="Search...">
  </div>
 <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
</form>
  </div>
</div>
   </div>
 </div>


  
</div>


<?php include 'includes/footer.php';?>