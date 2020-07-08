 <?php
  $showAlert=false;
  $showError=false;
if($_SERVER["REQUEST_METHOD"] == 'POST'){

  include 'partials/db_connect.php'; 
  $username =$_POST["username"];
  $password =$_POST['password'];
  $cpassword=$_POST['cpassword'];

  //$exists  =false;

  //check whether username exists 
  $existsSql="SELECT * FROM `users` WHERE username = '$username'";
  $result = mysqli_query($conn,$existsSql);
  $numExistRows= mysqli_num_rows($result);
  if($numExistRows > 0){
   // $exists = true;
   $showError="Username is already Exists"; 
  }
  else{
    //$exists = false;\
  if(($password == $cpassword)){
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $sql="INSERT INTO `users` (`username`, `password`, `date`) VALUES ('$username', '$password', current_timestamp())";

    $result = mysqli_query($conn, $sql);
    if ($result){
      $showAlert= true;
    }

  }
  else{
    $showError=" Passwords do not match ";
  }



  
  }
}
 ?>



 <!DOCTYPE html>
  <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Signup</title>
  </head>
  <body>
   <?php require'partials/nav.php'?>
   <?php
   if($showAlert){
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success!</strong> Your Account is Now Created!! You can login Now!
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
    
  }
   if($showError){
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Error!</strong>'.$showError.'
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>';
    
  }
  ?>
<div class="container my-4">
  <h1 class="text-center">Signup To our Online Ebook System</h1>

</div>
<form action="/tutuorial/loginSystem/signup.php" method="POST" style="display: flex;
    flex-direction: column;
    align-items: center; ">
  <div class="form-group col-md-6">
    <label for="exampleInputEmail1">Username</label>
    <input type="username" maxlength="11" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Enter Username">
    
  </div>
  <div class="form-group col-md-6">
    <label for="password">Password</label>
    <input type="password" maxlength="11" class="form-control" id="password" name="password" placeholder="Password">
  </div>
  <div class="form-group col-md-6">
    <label for="cpassword">Confirm Password</label>
    <input type="password" maxlength="11" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password">
    <small id="emailHelp" class="form-text text-muted">Make sure Your password will be same.</small>
  </div>

  
  <button type="submit" class="btn btn-primary">SignUp</button>
</form>
<div class="text-center">Already have an account? <a href="login.php">Login here</a>.</div>
















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
 
 </body>
 </html>