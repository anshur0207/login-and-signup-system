<?php

// session_start();
 if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin= true;
 }
 else
  $loggedin= false;

echo'<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/loginsystem">iSecure</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/tutuorial/loginSystem/welcome.php">Home <span class="sr-only">(current)</span></a>
      </li>';

      // if(!$loggedin){
    //   echo'<li class="nav-item">
    //     <a class="nav-link" href="/tutuorial/loginSystem/login.php">Login</a>
    //   </li>
    //   <li class="nav-item">
    //     <a class="nav-link" href="/tutuorial/loginSystem/signup.php">Sign Up</a>
    //   </li>';
    // }
      if ($loggedin){
      echo'<li class="nav-item">
        <a class="nav-link" href="/tutuorial/loginSystem/logout.php">Logout</a>
      </li>';
     }
     
   echo'</ul>
    
    </form>
  </div>
</nav>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>';
    ?>