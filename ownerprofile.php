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
    <a class="nav-link" href="#">Areesha</a>
  </li>
</ul>
</div>
</nav>
</div>


<div class="container">
  <br>
  <?php echo $_SESSION['id']; ?>
  <br>

      <h2 style="font-family: monospace;"><b>Mr. ABCD</b></h2>


  <div class="row">

    <div class="col-sm-8">
      <br><br>
      <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-sm-4">
             <img src="images/shop.jpg" height="160" width="160">
          </div>
          <div class="col-sm-8">
            <h3 >Shop Name</h3>
            <h6>The shop description here.</h6>
            <br>
            <span class="text-left">Shop Address here.</span>
            <div class="float-right">
             <span>Mr. ABCD</span><br>
             <span>Contact : 9891950609</span>
          </div>
          </div>
          
        </div>
      
      </div>
    </div>
    <br>
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-sm-4">
             <img src="images/shop.jpg" height="160" width="160">
          </div>
          <div class="col-sm-8">
            <h3 >Shop Name</h3>
            <h6>The shop description here.</h6>
            <br>
            <span class="text-left">Shop Address here.</span>
            <div class="float-right">
             <span>Mr. ABCD</span><br>
             <span>Contact : 9891950609</span>
          </div>
          </div>
        </div>
      
      </div>
    </div>
    <br>
    </div>

    <div class="col-sm-4">
      <br><br><br><br>
      <button class="btn btn-info">EDIT</button>
      
      <button class="btn btn-danger">DELETE</button>
      <br><br><br><br>
      <button class="btn btn-info">EDIT</button>
      
      <button class="btn btn-danger">DELETE</button>
    </div>
    


  </div>


</div>











<?php include 'includes/footer.php';?>