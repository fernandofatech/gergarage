
    <!DOCTYPE html>
<html lang="en">
<head>
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
        <a class="nav-link" href="signIn.php">Sign in</a>
      </li>
      <li class="nav-item">
         <a class="nav-link disabled" href="#">Sign up</a>
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
          

            <div class="container p-3">

    <form action="insert.php" method="post" autocomplete="on">
    <div class="form-row">
                    <div class="col-4">
                        <label for="">Name</label>
                        <input type="name" class="form-control" name="fname" placeholder="Name"required>
                    </div>

                    <div class="col-8 ">
                        <label for="">Surname</label>
                        <input type="name" class="form-control" name="sName" placeholder="Surame"required>
                    </div>
                    </div>

                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Email"required>
                    </div>

                    
        
                    <div class="form-group ">
                        <label for="">Mobile number</label>
                        <input type="phone" class="form-control" name="mNumber" placeholder="Phone Number"required>   
                    </div>

                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="address" class="form-control" name="address" placeholder="34 Mountjoy Square"required>
                    </div>

                    <div class="form-group">
                        <label for="">Address2</label>
                        <input type="address2" class="form-control" name="address2" placeholder="house, apartament..."required>
                    </div>

                    <div class="form-group">
                        <label for="">Eircode</label>
                        <input type="text" class="form-control" name="eircode" placeholder="D16H5R3"required>
                    </div>


    
                
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password"required>
                        <small id="passwordHelpInline" class="text-muted">
      Maximum 8 characters.
    </small>
    
                    </div>

                    
                    <button class="btn bg-info btn-block" type="submit" name="submit">Submit</button><br><br>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div> 
    </div>
	

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