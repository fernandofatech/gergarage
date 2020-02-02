<?php


//Resolver o problema com o login 
//Inicializando sessao php

include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST")

{
  $email = $_POST['email'];
  $password = $_POST['password'];
  $sql = "SELECT * FROM user WHERE email='$email' && password='$password'";
  
  $result = mysqli_query($link, $sql);
  $row = mysqli_fetch_assoc($result);

  $count = mysqli_num_rows($result);

  // If result matched $myusername and $mypassword, table row must be 1 row
  if ($count == 1) {
    session_start();

    $_SESSION['id_user'] = $row['id_user'];//criar uma variavel todas vezes que eu tiver logado
    $_SESSION['user_name'] = $row['fname'];
    $_SESSION['user_email'] = $row['email'];
    $_SESSION['user_surname'] = $row['sName'];
    
    header('Location: loggedInIndex.php');
  } else {
    echo '<script>alert("Your Login Name or Password is invalid!")</script>';
  }
}

?>

<html lang="en">
    <meta charset="UTF-8"/>
    <head>
        <title>The best solution to your vehicle</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="-css/form.css">

    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Ger's Garage</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Sign in</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="signUp.php">Sign up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact us</a>
      </li>
      
    </ul>
  </div>
</nav>


<form method="post">
  

    <div class="simple-login-container p -3">
        <h2 class="text-center">Sign In</h2>
        <div class="row ">
        
        <div class="col-sm-4 offset-sm-4 text-center form-group">
            <input type="email" class="form-control" placeholder="Enter email" name="email" required>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4 offset-sm-4 text-center form-group">
            <input type="password" placeholder="Enter your Password" class="form-control" name ="password">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4 offset-sm-4 text-center form-group">
            <input type="submit" class="btn bg-info btn-block" >
        </div>
    </div>
    </div>
</div>


     
  
</form>

  
<!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4">

  <!-- Footer Elements -->
  <div class="container">

    <!-- Social buttons -->
    <ul class="list-unstyled list-inline text-center">
      <li class="list-inline-item">
        <a class="btn-floating btn-fb mx-1" href="http:www.facebook.com" target="blank" ><img  alt="Facebook" src="img/facebook.png" width="45px" height="45px">
          <i class="fab fa-facebook-f"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-tw mx-1" href= "http:www.twitter.com" target="blank" ><img  alt="Twitter" src="img/Twitter.png" width="45px" height="45px">
          <i class="fab fa-twitter"> </i>
        </a>
      </li>
      
      
      
    </ul>
    <!-- Social buttons -->
   
  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright by Gilmar Araujo
    </div>

</footer>

</div>
</body>
</html>