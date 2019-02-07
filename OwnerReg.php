<?php  include 'includes/header.php' ;?>








<div id="nav-bar">
	<nav class="navbar navbar-light" style="background-color:#B0E0E6;">
  <!-- Navbar content -->
   <a class="navbar-brand" href="home.php">
    <img src="images/nearmeicon.png" width="30" height="30" class="d-inline-block align-top" alt="">
    <b>Near Me</b>
  </a>
  <div class="rightNavMenu">
  <ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link" href="LoginPage.php">Login</a>
  </li>
</ul>
</div>
</nav>
</div>
<br>

<?php
if(isset($_POST['signup'])){
        $name=$_POST['username'];
        $user_name=$_POST['user_username'];
        $usercontact=$_POST['mobno'];
        $useremail=$_POST['useremail'];
        $userpswd=$_POST['userpswd'];
        $flag=0;
        $queryy="SELECT * FROM user";
          $resultt=mysqli_query($connect,$queryy);
          while($row=mysqli_fetch_assoc($resultt)){
            $useremaildb=$row['user_email'];
            if($useremaildb==$useremail){
              $flag=1;
              echo '<div class="alert alert-danger" role="alert" style="width: 800px; margin-top: 50px; margin-left: 280px; height: 50px;">
            Email already exists!! Enter a new email.
          </div>';
          break;
            }
          }
          if($flag!=1){
        $query="INSERT INTO user (user_name,user_username,user_contact,user_email,user_pass) VALUES ('{$name}','{$user_name}','{$usercontact}','{$useremail}','{$userpswd}')";
        $result=mysqli_query($connect,$query);
        
       
if(!$result){

          echo '<div class="alert alert-secondary" role="alert" style="width: 800px; margin-top: 50px; margin-left: 280px; height: 50px;">
                  Registration Failed!!
                </div>';
          die();
        }else{

          
          
          echo '<div class="alert alert-success" role="alert" style="width: 800px; margin-top: 50px; margin-left: 280px; height: 50px;">
            Registration successful!
          </div>';
        
        }
      }
    }
        ?>

<div class="jumbotron" style="width: 800px; margin-top: 50px; margin-left: 280px; height: 520px;" >
  <h1 style="font-family: monospace">Sign Up</h1>
 <br>


  <form method="post">
    <div class="form-group row">
    <label for="inputName3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputName3" placeholder="Name" name="username">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputUsername3" class="col-sm-2 col-form-label">User Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputUsername3" placeholder="User-Name" name="user_username">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Contact No.</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Contact Number" name="mobno">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="useremail">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="userpswd">
    </div>
  </div>
  <br>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" name="signup">Sign up</button>
    </div>
  </div>
</form>
</div>

<?php include 'includes/footer.php' ; ?>