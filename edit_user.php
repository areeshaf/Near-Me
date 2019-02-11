<?php  include 'includes/header.php' ;?>


<?php $session_id = $_SESSION['id']; ?>





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
        if(isset($_GET['edit'])){
              $user_id=$_GET['edit'];
              if($user_id == $session_id){
              $fetch_query="SELECT * FROM user WHERE user_id=$user_id";
              $fetch_result=mysqli_query($connect,$fetch_query);
              $fetch_row=mysqli_fetch_assoc($fetch_result);
              $fetch_name=$fetch_row['user_name']; 
              $fetch_username=$fetch_row['user_username'];
              $fetch_contact=$fetch_row['user_contact'];
              $fetch_email=$fetch_row['user_email'];
              $fetch_pswd=$fetch_row['user_pass'];
              }
              else{
               header('Location: ownerprofile.php') ;
              }
            }

              else{
                header("Location: ownerprofile.php");
              }

      if(isset($_POST['editbtn'])){
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
            $dbUser_id = $row['user_id'] ;
            if($useremaildb==$useremail  && $dbUser_id != $user_id){
              $flag=1;
              echo '<div class="alert alert-danger" role="alert" style="width: 800px; margin-top: 50px; margin-left: 280px; height: 50px;">
            Email already exists!! Enter a new email.
          </div>';
          break;
            }
          }
          if($flag!=1){
            
              
              

        $query="UPDATE user SET user_name = '$name' , user_username = '$user_name' , user_contact = '$usercontact' , user_email = '$useremail' , user_pass = '$userpswd' WHERE user_id=$user_id" ;
        $result=mysqli_query($connect,$query);
        
       
if(!$result){

          echo '<div class="alert alert-danger" role="alert" style="width: 800px; margin-top: 50px; margin-left: 280px; height: 50px;">
                  Registration Failed!!
                </div>';
          die();
        }else{

          header("Location: ownerprofile.php");
          
          // echo '<div class="alert alert-success" role="alert" style="width: 800px; margin-top: 50px; margin-left: 280px; height: 50px;">
          //   Registration successful!
          // </div>';
        
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
      <input type="text" class="form-control" id="inputName3" placeholder="Name" name="username" value="<?php echo $fetch_name ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputUsername3" class="col-sm-2 col-form-label">User Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputUsername3" placeholder="User-Name" name="user_username" value="<?php echo $fetch_username ?>">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Contact No.</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Contact Number" name="mobno" value="<?php echo $fetch_contact ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="useremail" value=" <?php echo $fetch_email ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="userpswd" value="<?php echo $fetch_username ?>">
    </div>
  </div>
  <br>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" name="editbtn">Update</button>
    </div>
  </div>
</form>
</div>

<?php include 'includes/footer.php' ; ?>