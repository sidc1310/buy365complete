<?php
/* Set Variables */


session_start();

if ((isset($_SESSION['user_email']) && $_SESSION['user_email'] != ''))
 {

   header ("LOCATION:home.php");

}

$host="localhost";
$db="buy365web"; 
$username="root";
$pass="12345";/* Attempt to connect */
$mysqli=new mysqli($host,$username,$pass,$db);
if(mysqli_connect_error())
  {
    die('Connect Error ('. mysqli_connect_errno().') '. mysqli_connect_error());
  }


?>


      

<!DOCTYPE html>
<html lang="en">
<head>
  <title>JustBuy365</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;    
      color:white;
      margin-top: 0;  
      border-radius: 0;
      background-color:;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 30px;
      margin-top: 50px;
      color:white;      

      background-image: url("ecomm2.jpg");
      background-size: cover;
      background-image:  opacity: 0.3;
     }

       /* Add a gray background color and some padding to the footer */
    footer {
      background-color:#f2f2f2;
      padding: 25px;
    }
  </style>


</head>
<body>

      

<div class="jumbotron">
  <div class="container text-right">
    <h1>JustBuy365</h1>      
    <p>For best deals 24x7..</p>
  </div>
</div>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Buy365</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index2.php">Home</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">BestDeals</a></li>   
        <li><a href="#"><span class="glyphicon glyphicon-search"></span> Search</a></li>     
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> SignUp</a></li>

        <li><a href="#myModal" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" ></span> Login</a></li>
        <li><a href="aboutus.php"><span class="glyphicon glyphicon-menu-hamburger"></span> AboutUs</a></li>  
        <li><a href="contactus.php"><span class="glyphicon glyphicon-earphone"></span> ContactUs</a></li>       

      </ul>
    </div>
  </div>
</nav>

<div class="modal fade" id="myModal">
  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title">Log-in</h4>
        </div>
        <form action="login-script.php" method="post" role="form">
              <div class="modal-body">
                <div class="form-group">
              <label for="InputEmail">Email address</label>
              <input class="form-control" name="InputEmail" id="InputEmail" placeholder="Enter email" type="email">
              </div>
            <div class="form-group">
              <label for="InputPassword">Password</label>
            <input class="form-control" id="InputPassword" name="InputPassword" placeholder="Password" type="password">
            </div>
                <p class="text-right"><a href="#">Forgot password?</a></p>
              </div>
              <div class="modal-footer">
                <!--<a href="#" data-dismiss="modal" class="btn">Close</a>-->

                   <div class="col-xs-6 col-sm-6 col-md-6">
                       <input type="submit" name="SUBMIT_MESSAGE" value="LOG-IN" class="btn btn-lg btn-success btn-block">
                  </div>



                <!--<a href="#" class="btn btn-primary">Log-in</a>-->
              </div>
        </form>
      </div>
    </div>
</div>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Samsung Galaxy J5 - 6 (New 2016 Edition)</div>
        <div class="panel-body"><img src="mobileimages/galaxyj7.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><a href="#myModal" role="button" data-toggle="modal" class="btn btn-primary btn-block">Order Now!</a></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-success">
        <div class="panel-heading">Samsung Galaxy Core Prime</div>
        <div class="panel-body"><img src="mobileimages/samsunggalaxycoreprime.jpeg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><a href="#myModal" role="button" data-toggle="modal" class="btn btn-primary btn-block">Order Now!</a></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">Redmi 2 Prime</div>
        <div class="panel-body"><img src="mobileimages/Redmi-2-Prime.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><a href="#myModal" role="button" data-toggle="modal" class="btn btn-primary btn-block">Order Now!</a></div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-success">
        <div class="panel-heading">Lenovo K3 Note</div>
        <div class="panel-body"><img src="mobileimages/lenovok3.jpeg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><a href="#myModal" role="button" data-toggle="modal" class="btn btn-primary btn-block">Order Now!</a></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">Micromax Canvas Evok</div>
        <div class="panel-body"><img src="mobileimages/canvas-evok2.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><a href="#myModal" role="button" data-toggle="modal" class="btn btn-primary btn-block">Order Now!</a></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-success">
        <div class="panel-heading">Micromax Canvas Amaze 2</div>
        <div class="panel-body"><img src="mobileimages/canvasamaze.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><a href="#myModal" role="button" data-toggle="modal" class="btn btn-primary btn-block">Order Now!</a></div>
      </div>
    </div>
  </div>
</div><br><br>

<footer class="container-fluid text-center">
  <p>Copyright&copy NILESH PRASAD</p>  
  <form class="form-inline">Get deals:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
  </form>
</footer>

</body>
</html>


