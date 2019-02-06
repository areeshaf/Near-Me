<?php include 'includes/header.php' ;?>




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
  <form method="post" action="ownerprofile.php">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email" placeholder="Email">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="password" placeholder="Password">
    </div>
  </div>
  
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Login</button>
    </div>
  </div>
</form>
</div>




<?php include 'includes/footer.php' ;?>