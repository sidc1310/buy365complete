<?php
/* Set Variables */


session_start();

if (!(isset($_SESSION['user_email']) && $_SESSION['user_email'] != ''))
 {

   header ("LOCATION:index2.php");

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
      <a class="navbar-brand" href="home.php"><span class="glyphicon glyphicon-home"></span> Buy365 Home</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      
      <ul class="nav navbar-nav navbar-right">

        <li><a href="cartpg.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
        <li><a href="wishlist.php"><span class="glyphicon glyphicon-heart-empty"></span> WishList</a></li>
        <li><a href="orderhis.php"><span class="glyphicon glyphicon-list-alt"></span> OrderHistory</a></li>
        <li><a href="settingspg.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>  
        <li><a href="logoutscript.php"><span class="glyphicon glyphicon-log-out"></span> LogOut</a></li>       

      </ul>
    </div>
  </div>
</nav>

<div class="container" style="margin-top:70px ">
    <h2 class="well">Update your Data..</h2>
  <div class="col-lg-12 well">
  <div class="row">
        <form>
          <div class="col-sm-12">
                     
            <div class="form-group">
              <label>Change Address</label>
              <textarea placeholder="Enter Your New Address Here.." rows="4" class="form-control"></textarea>
            </div>  

            <div class="row">
              <div class="col-sm-6 form-group">
                <label>Change City</label>
                <input type="text" placeholder="Enter Your New City Name Here.." class="form-control">
              </div>  
              <div class="col-sm-6 form-group">
                <label>Change State</label>
                <input type="text" placeholder="Enter Your New State Name Here.." class="form-control">
              </div>  
                
            </div>
                        
          <div class="form-group">
            <label>Update Contact Number</label>
            <input type="number" placeholder="Enter Your New Mobile Number Here.." class="form-control">
          </div>                     
              
           
          
          <button type="button" class="btn btn-lg btn-info">Submit</button>         
          </div>
        </form> 
        </div>
  </div>
</div>


<div class="container" style="margin-top:15px ">
    <h3 class="well">Do you want to change your password?</h3>
  <div class="col-lg-12 well">
  <div class="row">
        <form>
          <div class="col-sm-12">
                     
            <div class="form-group">
                <label for="pwd">Old Password:</label>
                <input type="password" class="form-control" id="pwd">
            </div>

            <div class="form-group">
                <label for="pwd">Your New Password:</label>
                <input type="password" class="form-control" id="pwd">
            </div>

            <button type="button" class="btn btn-lg btn-info">Submit</button> 
          </div>
        </form>
  </div>
  </div>
</div>
</body>
</html>


