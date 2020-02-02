<?php
    include('session.php');

    if(array_key_exists('id_mechanic', $_POST)) { 
        $bookings_mechanics = array_map(function($a, $b){return ["id_booking"=>$a,"id_mechanic"=>$b]; }, $_POST['id_booking'], $_POST['id_mechanic']);
        
        foreach($bookings_mechanics as $booking_mechanic){
            if(empty(trim($booking_mechanic['id_mechanic']))){
                continue;
            }
            $id_booking = mysqli_real_escape_string($link,$booking_mechanic['id_booking']);
            $id_mechanic = mysqli_real_escape_string($link,$booking_mechanic['id_mechanic']);
            
            $stmt = "UPDATE booking b SET b.mechanic_id_mechanic = $id_mechanic WHERE b.mechanic_id_mechanic IS NULL AND b.id_booking = $id_booking; ";

            if(mysqli_query($link, $stmt)){
                // success
            } else{
                // error
                echo "<script>alert(\"ERROR: Could not able to execute $stmt. " . mysqli_error($link) . "\")</script>";
            }
        }
    }
 
    $stmt = mysqli_prepare($link,"SELECT b.`id_booking` "
        ."    ,b.`date` "
        ."    ,b.`timeslot` "
        ."    ,b.`comment` "
        ."    ,u.`id_user` "
        ."    ,u.`fname` "
        ."    ,u.`sName` "
        ."FROM booking b "
        ."INNER JOIN user u "
        ."    ON u.`id_user` = b.`user_id_user` "
        ."WHERE b.`mechanic_id_mechanic` IS NULL; "
    );
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $rows[] = $row;
    }
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

    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>

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
    <table>
        <tr>
            <th>id_booking</th>
            <th>date</th>
            <th>timeslot</th>
            <th>comment</th>
            <th>id_user</th>
            <th>fname</th>
            <th>sName</th>
            <th>mechanic</th>
        </tr>

    <?php
    $i = 0;
    foreach($rows as $row) {
        echo '<tr>';
        echo '    <td>'.$row['id_booking'].'</td>';
        echo '    <td>'.date('d/m/Y', $row['date']).'</td>';
        echo '    <td>'.$row['timeslot'].'</td>';
        echo '    <td>'.$row['comment'].'</td>';
        echo '    <td>'.$row['id_user'].'</td>';
        echo '    <td>'.$row['fname'].'</td>';
        echo '    <td>'.$row['sName'].'</td>';
        echo '    <td>';
        echo '        <input type="hidden" name="id_booking['.$i.']" value="'.$row['id_booking'].'" />';
        echo '        <select class="form-control" name="id_mechanic['.$i.']" id="id_mechanic">';
        echo '            <option></option>';
        echo '            <option value="1">Aric</option>';
        echo '            <option value="2">Pamela</option>';
        echo '            <option value="3">Guadalupe</option>';
        echo '            <option value="4">Glen</option>';
        echo '            <option value="5">Andre</option>';
        echo '            <option value="6">Korbin</option>';
        echo '            <option value="7">Rosanna</option>';
        echo '            <option value="8">Roma</option>';
        echo '            <option value="9">Angeline</option>';
        echo '            <option value="10"Cristina></option>';
        echo '        </select>';
        echo '    </td>';
        echo '</tr>';
        $i++;
    }
    ?>

    </table>

        <input type="submit" value="Submit" />
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
</body>
</html>