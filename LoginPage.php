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
<?php 

if(isset($_POST['login'])){
  $user_email=$_POST['email'];
  $user_pass=$_POST['password'];
      $user_email = mysqli_real_escape_string($connect , $user_email);
      $user_pass = mysqli_real_escape_string($connect , $user_pass);
  

  $query="SELECT * FROM user WHERE user_email='$user_email'";
  $result=mysqli_query($connect,$query);

  if($result){

    $count=mysqli_num_rows($result);
    if($count==1){
      //$query="SELECT user_pass FROM user WHERE user_email='$user_email'";
      //$result=mysqli_query($connect,$query);
      $row=mysqli_fetch_assoc($result);
      $dbuser_pass=$row['user_pass'];
      if($user_pass==$dbuser_pass){
        // <div class = "alert alert-success" style="width: 800px; margin-top: 50px; margin-left: 280px; height: 50px;">
    //Logged In!!;
    //</div>; 

    $_SESSION['id']=$row['user_id'];

    header("Location: ownerprofile.php");

    
      }else{?>
        <div class = "alert alert-danger" style="width: 800px; margin-top: 50px; margin-left: 280px; height: 50px;">
    Password Incorrect!!;
    </div>;<?php
      }
    }else{?>
    <div class = "alert alert-danger" style="width: 800px; margin-top: 50px; margin-left: 280px; height: 50px;">
    Not Registered!! Kindly register to Login.
    </div>;
    <?php
  }
  }

}



?> 
<div class="jumbotron" style="width: 600px; margin-top: 50px; margin-left: 380px; height: 400px;" >
  <h1 style="font-family: monospace">Login</h1>
 <br>
  <form method="post" action="">
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
      <button type="submit" class="btn btn-primary" name="login">Login</button>
    </div>
  </div>
</form>
</div>




<?php include 'includes/footer.php' ;?>