<?php
    include('session.php');

    $stmt = mysqli_prepare($link,"SELECT u.`id_user` "
        ."    ,u.`fname` "
        ."    ,u.`sName` "
        ."    ,b.`date` "
        ."    ,b.`timeslot` "
        ."    ,b.`comment` "
        ."FROM booking b "
        ."LEFT JOIN user u "
        ."    ON u.`id_user` = b.`user_id_user` "
        ."WHERE u.id_user = ? "
        ."ORDER BY b.id_booking DESC LIMIT 1; "
    );
    mysqli_stmt_bind_param($stmt,'i',$_GET['id_user']);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8"/>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="-css/form.css">
    <title></title>
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
<form method="get">
    <div class="container p-3">
        <h2 class="text-center">My History</h2>
    <div class="row">
        <!-- Search form -->
        <div class="col-sm-12 text-center form-group"><br>Insert Booking ID Number</br>
            <input class="number" name="id_user" placeholder="Search by booking ID" aria-label="Search">
        </div>

    </div>
    
    <div class="row ">
        <div class="col-sm-4 offset-sm-4 text-center form-group">
             <button class="btn bg-info btn-block" type="submit" name="Submit">Search</button><br><br>
    </div>
        </div>
        </div>
    </form>
    
    
    <?php
   
    echo $row['id_user']."<br/>";
    echo $row['fname']."<br />";
    echo $row['sName']."<br />";
    echo $row['date']."<br />";
    echo $row['timeslot']."<br />";
    echo $row['comment']."<br />";
    
    ?>
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
</body>
</html>