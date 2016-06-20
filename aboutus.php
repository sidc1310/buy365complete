<?php
/* Set Variables */


session_start();

if ((isset($_SESSION['user_email']) && $_SESSION['user_email'] != ''))
 {

   header ("LOCATION:home.php");

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
    .navbar 
    {
      margin-bottom: 50px;    
      color:white;
      margin-top: 0;  
      border-radius: 0;
      background-color:;
    }

    footer
    {
      background-color:#f2f2f2;
      padding: 25px;
    }
  </style>


</head>

<body>

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
        <li ><a href="index2.php">Home</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">BestDeals</a></li>   
        <li><a href="#"><span class="glyphicon glyphicon-search"></span> Search</a></li>     
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> SignUp</a></li>

        <li><a href="#myModal" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" ></span> Login</a></li>
        <li class="active"><a href="aboutus.php"><span class="glyphicon glyphicon-menu-hamburger"></span> AboutUs</a></li>  
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

<div class="container-fluid" style="margin-top:60px">
  
    <div class="row">
  		<div class="container">
  				    <div class="col-sm-12" style="background-color:lavender;">  				    		
							<div class="panel panel-default">
							<div class="panel-heading">Our-Team</div>
							<div class="panel-body">
							<p>The founder of this E-commerce website is Nilesh Prasad. It took him two months of part-time work to complete this project.</p>
							<p>Although he started this website alone, there are more than 200 employees currently working in different sectors. We are constantly hiring highly skilled professionals for the developemnt of this organization.. </p>

				    </div>

				    
		</div>
	</div>
</div>


<div class="container-fluid" style="margin-top:30px">
  
    <div class="row">
  		<div class="container">
  				    <div class="col-sm-12" style="background-color:lavender;">
  				    		
							<div class="panel panel-default">
							<div class="panel-heading">History</div>
							<div class="panel-body">
							<p>This website was founded by Nilesh Prasad in 2015 out of his hostel dorm room and since then, this organization has grown rapidly
							and customers are finding this website very useful for finding the best deals .. </p>
				    </div>

				    
		</div>
	</div>
</div>


<div class="container-fluid" style="margin-top:30px">
  
    <div class="row">
  		<div class="container">
  				    <div class="col-sm-12" style="background-color:lavender;">
  				    		
							<div class="panel panel-default">
							<div class="panel-heading">CAREERS</div>
							<div class="panel-body">
							<p>Vacancies :
								<ul>
									<li>Backend web developer</li>
									<li>Marketing Interns</li>
								</ul>
							</p>
				    </div>

				    
		</div>
	</div>
</div>

<footer class="container-fluid text-center">
  <p>Copyright</p>  
  <form class="form-inline">Get deals:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
  </form>
</footer>


</body>
</html>

    